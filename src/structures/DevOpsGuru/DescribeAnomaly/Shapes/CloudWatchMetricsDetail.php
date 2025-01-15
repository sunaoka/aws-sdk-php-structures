<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property string|null $Namespace
 * @property list<CloudWatchMetricsDimension>|null $Dimensions
 * @property 'Sum'|'Average'|'SampleCount'|'Minimum'|'Maximum'|'p99'|'p90'|'p50'|null $Stat
 * @property string|null $Unit
 * @property int|null $Period
 * @property CloudWatchMetricsDataSummary|null $MetricDataSummary
 */
class CloudWatchMetricsDetail extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     Namespace?: string|null,
     *     Dimensions?: list<CloudWatchMetricsDimension>|null,
     *     Stat?: 'Sum'|'Average'|'SampleCount'|'Minimum'|'Maximum'|'p99'|'p90'|'p50'|null,
     *     Unit?: string|null,
     *     Period?: int|null,
     *     MetricDataSummary?: CloudWatchMetricsDataSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
