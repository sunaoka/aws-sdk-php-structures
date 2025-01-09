<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAwsNetworkPerformanceMetricSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Source
 * @property string $Destination
 * @property 'aggregate-latency' $Metric
 * @property 'p50' $Statistic
 * @property 'five-minutes'|'fifteen-minutes'|'one-hour'|'three-hours'|'one-day'|'one-week' $Period
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     Source?: string,
     *     Destination?: string,
     *     Metric?: 'aggregate-latency',
     *     Statistic?: 'p50',
     *     Period?: 'five-minutes'|'fifteen-minutes'|'one-hour'|'three-hours'|'one-day'|'one-week'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
