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
        'the instruction about §43 IfSG (aka Frikadellendiplom) from my Health Department and a second instruction from us or my employer/chef/association within 3 months. Additionally my second instruction is not older than 2 years.' => 'the hygene instructions and signed the statement.',

        // DE
        'Engeltypen' => 'Trolltypen',
        'Engeltyp'   => 'Trolltyp',
        'Engel'      => 'Trolle',
        'den Himmel' => 'die Trollhöhle',
        'Himmel'     => 'Trollhöhle',
        'Helfer'     => 'Trolle',
        'eine Belehrung nach §43 IfSG (Frikadellendiplom) bei meinem Gesundheitsamt erhalten und innerhalb von 3 Monaten die Zweitbelehrung durch uns oder meinen Arbeitgeber/Koch/Verein bekommen. Zusätzlich ist die Zweitbelehrung nicht älter als zwei Jahre.' => 'die Hygienebelehrung gelesen und die Erklärung unterschrieben.',
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
