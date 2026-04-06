<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCisScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Time $startTime
 * @property list<'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'> $days
 */
class WeeklySchedule extends Shape
{
    /**
     * @param array{
     *     startTime: Time,
     *     days: list<'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
