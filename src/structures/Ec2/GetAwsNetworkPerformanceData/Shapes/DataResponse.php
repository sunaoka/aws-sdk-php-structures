<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAwsNetworkPerformanceData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Source
 * @property string $Destination
 * @property 'aggregate-latency' $Metric
 * @property 'p50' $Statistic
 * @property 'five-minutes'|'fifteen-minutes'|'one-hour'|'three-hours'|'one-day'|'one-week' $Period
 * @property list<MetricPoint> $MetricPoints
 */
class DataResponse extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Source?: string,
     *     Destination?: string,
     *     Metric?: 'aggregate-latency',
     *     Statistic?: 'p50',
     *     Period?: 'five-minutes'|'fifteen-minutes'|'one-hour'|'three-hours'|'one-day'|'one-week',
     *     MetricPoints?: list<MetricPoint>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
