<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutSegmentSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 24> $Interval
 * @property 'HOURLY'|null $Unit
 */
class ScheduleConfiguration extends Shape
{
    /**
     * @param array{
     *     Interval: int<1, 24>,
     *     Unit?: 'HOURLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
