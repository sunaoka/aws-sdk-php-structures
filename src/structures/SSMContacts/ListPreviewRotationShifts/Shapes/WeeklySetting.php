<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPreviewRotationShifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|'SUN' $DayOfWeek
 * @property HandOffTime $HandOffTime
 */
class WeeklySetting extends Shape
{
    /**
     * @param array{
     *     DayOfWeek: 'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|'SUN',
     *     HandOffTime: HandOffTime
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
