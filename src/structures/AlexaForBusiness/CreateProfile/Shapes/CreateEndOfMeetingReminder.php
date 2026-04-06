<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $ReminderAtMinutes
 * @property 'ANNOUNCEMENT_TIME_CHECK'|'ANNOUNCEMENT_VARIABLE_TIME_LEFT'|'CHIME'|'KNOCK' $ReminderType
 * @property bool $Enabled
 */
class CreateEndOfMeetingReminder extends Shape
{
    /**
     * @param array{
     *     ReminderAtMinutes: list<int>,
     *     ReminderType: 'ANNOUNCEMENT_TIME_CHECK'|'ANNOUNCEMENT_VARIABLE_TIME_LEFT'|'CHIME'|'KNOCK',
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
