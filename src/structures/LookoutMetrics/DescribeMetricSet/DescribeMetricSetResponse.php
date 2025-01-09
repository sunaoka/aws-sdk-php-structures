<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $MetricSetArn
 * @property string $AnomalyDetectorArn
 * @property string $MetricSetName
 * @property string $MetricSetDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property int<0, 432000> $Offset
 * @property list<Shapes\Metric> $MetricList
 * @property Shapes\TimestampColumn $TimestampColumn
 * @property list<string> $DimensionList
 * @property 'P1D'|'PT1H'|'PT10M'|'PT5M' $MetricSetFrequency
 * @property string $Timezone
 * @property Shapes\MetricSource $MetricSource
 * @property list<Shapes\MetricSetDimensionFilter> $DimensionFilterList
 */
class DescribeMetricSetResponse extends Response
{
}
