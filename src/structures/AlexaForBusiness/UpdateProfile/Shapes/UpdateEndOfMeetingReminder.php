<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int>|null $ReminderAtMinutes
 * @property 'ANNOUNCEMENT_TIME_CHECK'|'ANNOUNCEMENT_VARIABLE_TIME_LEFT'|'CHIME'|'KNOCK'|null $ReminderType
 * @property bool|null $Enabled
 */
class UpdateEndOfMeetingReminder extends Shape
{
    /**
     * @param array{
     *     ReminderAtMinutes?: list<int>|null,
     *     ReminderType?: 'ANNOUNCEMENT_TIME_CHECK'|'ANNOUNCEMENT_VARIABLE_TIME_LEFT'|'CHIME'|'KNOCK'|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
