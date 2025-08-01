<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Time $startTime
 * @property 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT' $day
 */
class MonthlySchedule extends Shape
{
    /**
     * @param array{
     *     startTime: Time,
     *     day: 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
