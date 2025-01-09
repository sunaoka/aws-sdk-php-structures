<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $Namespace
 * @property list<CloudWatchMetricsDimension> $Dimensions
 * @property 'Sum'|'Average'|'SampleCount'|'Minimum'|'Maximum'|'p99'|'p90'|'p50' $Stat
 * @property string $Unit
 * @property int $Period
 * @property CloudWatchMetricsDataSummary $MetricDataSummary
 */
class CloudWatchMetricsDetail extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     Namespace?: string,
     *     Dimensions?: list<CloudWatchMetricsDimension>,
     *     Stat?: 'Sum'|'Average'|'SampleCount'|'Minimum'|'Maximum'|'p99'|'p90'|'p50',
     *     Unit?: string,
     *     Period?: int,
     *     MetricDataSummary?: CloudWatchMetricsDataSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
