<?php

/**
 * Include legacy code
 */

$includeFiles = [
    __DIR__ . '/../includes/sys_form.php',
    __DIR__ . '/../includes/sys_log.php',
    __DIR__ . '/../includes/sys_menu.php',
    __DIR__ . '/../includes/sys_page.php',
    __DIR__ . '/../includes/sys_template.php',

    __DIR__ . '/../includes/model/NeededAngelTypes_model.php',
    __DIR__ . '/../includes/model/ShiftEntry_model.php',
    __DIR__ . '/../includes/model/Shifts_model.php',
    __DIR__ . '/../includes/model/ShiftsFilter.php',
    __DIR__ . '/../includes/model/ShiftSignupState.php',
    __DIR__ . '/../includes/model/Stats.php',

    __DIR__ . '/../includes/view/AngelTypes_view.php',
    __DIR__ . '/../includes/view/PublicDashboard_view.php',
    __DIR__ . '/../includes/view/Locations_view.php',
    __DIR__ . '/../includes/view/ShiftCalendarLane.php',
    __DIR__ . '/../includes/view/ShiftCalendarRenderer.php',
    __DIR__ . '/../includes/view/ShiftCalendarShiftRenderer.php',
    __DIR__ . '/../includes/view/ShiftsFilterRenderer.php',
    __DIR__ . '/../includes/view/Shifts_view.php',
    __DIR__ . '/../includes/view/ShiftEntry_view.php',
    __DIR__ . '/../includes/view/UserAngelTypes_view.php',
    __DIR__ . '/../includes/view/UserHintsRenderer.php',
    __DIR__ . '/../includes/view/User_view.php',

    __DIR__ . '/../includes/controller/angeltypes_controller.php',
    __DIR__ . '/../includes/controller/public_dashboard_controller.php',
    __DIR__ . '/../includes/controller/locations_controller.php',
    __DIR__ . '/../includes/controller/shift_entries_controller.php',
    __DIR__ . '/../includes/controller/shifts_controller.php',
    __DIR__ . '/../includes/controller/users_controller.php',
    __DIR__ . '/../includes/controller/user_angeltypes_controller.php',

    __DIR__ . '/../includes/helper/legacy_helper.php',
    __DIR__ . '/../includes/helper/message_helper.php',
    __DIR__ . '/../includes/helper/email_helper.php',

    __DIR__ . '/../includes/mailer/shifts_mailer.php',
    __DIR__ . '/../includes/mailer/users_mailer.php',

    __DIR__ . '/../includes/pages/admin_active.php',
    __DIR__ . '/../includes/pages/admin_arrive.php',
    __DIR__ . '/../includes/pages/admin_free.php',
    __DIR__ . '/../includes/pages/admin_groups.php',
    __DIR__ . '/../includes/pages/admin_shifts.php',
    __DIR__ . '/../includes/pages/admin_user.php',
    __DIR__ . '/../includes/pages/user_myshifts.php',
    __DIR__ . '/../includes/pages/user_shifts.php',
];

foreach ($includeFiles as $file) {
    require_once realpath($file);
}
