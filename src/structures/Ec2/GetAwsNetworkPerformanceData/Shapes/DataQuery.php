<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAwsNetworkPerformanceData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Source
 * @property string|null $Destination
 * @property 'aggregate-latency'|null $Metric
 * @property 'p50'|null $Statistic
 * @property 'five-minutes'|'fifteen-minutes'|'one-hour'|'three-hours'|'one-day'|'one-week'|null $Period
 */
class DataQuery extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Source?: string|null,
     *     Destination?: string|null,
     *     Metric?: 'aggregate-latency'|null,
     *     Statistic?: 'p50'|null,
     *     Period?: 'five-minutes'|'fifteen-minutes'|'one-hour'|'three-hours'|'one-day'|'one-week'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
