<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $MetricSetArn
 * @property string|null $AnomalyDetectorArn
 * @property string|null $MetricSetName
 * @property string|null $MetricSetDescription
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property int<0, 432000>|null $Offset
 * @property list<Shapes\Metric>|null $MetricList
 * @property Shapes\TimestampColumn|null $TimestampColumn
 * @property list<string>|null $DimensionList
 * @property 'P1D'|'PT1H'|'PT10M'|'PT5M'|null $MetricSetFrequency
 * @property string|null $Timezone
 * @property Shapes\MetricSource|null $MetricSource
 * @property list<Shapes\MetricSetDimensionFilter>|null $DimensionFilterList
 */
class DescribeMetricSetResponse extends Response
{
}
