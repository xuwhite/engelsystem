<?php

declare(strict_types=1);

namespace Engelsystem\EventSpecific;

use Engelsystem\Helpers\Translation\Translator as EngelsystemTranslator;

class Translator extends EngelsystemTranslator
{
    /** @var array */
    protected array $replacements = [
        // EN
        'Angeltypes' => 'Trolltypes',
        'angeltypes' => 'trolltypes',
        'Angeltype'  => 'Trolltype',
        'Angels'     => 'Trolls',
        'angels'     => 'trolls',
        'Angel'      => 'Troll',
        'Heaven'     => 'Troll Cave',
        'helpers'    => 'trolls',
        'helper'     => 'troll',

        // DE
        'Engeltypen' => 'Trolltypen',
        'Engeltyp'   => 'Trollatyp',
        'Engel'      => 'Trolle',
        'den Himmel' => 'die Trollhöhle',
        'Himmel'     => 'Trollhöhle',
        'Helfer'     => 'Trolle',
    ];

    /**
     * @param array  $replace
     *
     */
    protected function replaceText(string $text, array $replace = []): mixed
    {
        $text = parent::replaceText($text, $replace);

        $text = str_replace(array_keys($this->replacements), array_values($this->replacements), $text);

        return $text;
    }
}
