<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCisScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT' $day
 * @property Time $startTime
 */
class MonthlySchedule extends Shape
{
    /**
     * @param array{
     *     day: 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT',
     *     startTime: Time
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
