<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'> $days
 * @property Time $startTime
 */
class WeeklySchedule extends Shape
{
    /**
     * @param array{
     *     days: list<'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'>,
     *     startTime: Time
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
