<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateMetricSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string $MetricSetName
 * @property string $MetricSetDescription
 * @property list<Shapes\Metric> $MetricList
 * @property int<0, 432000> $Offset
 * @property Shapes\TimestampColumn $TimestampColumn
 * @property list<string> $DimensionList
 * @property 'P1D'|'PT1H'|'PT10M'|'PT5M' $MetricSetFrequency
 * @property Shapes\MetricSource $MetricSource
 * @property string $Timezone
 * @property array<string, string> $Tags
 * @property list<Shapes\MetricSetDimensionFilter> $DimensionFilterList
 */
class CreateMetricSetRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     MetricSetName: string,
     *     MetricSetDescription?: string,
     *     MetricList: list<Shapes\Metric>,
     *     Offset?: int<0, 432000>,
     *     TimestampColumn?: Shapes\TimestampColumn,
     *     DimensionList?: list<string>,
     *     MetricSetFrequency?: 'P1D'|'PT1H'|'PT10M'|'PT5M',
     *     MetricSource: Shapes\MetricSource,
     *     Timezone?: string,
     *     Tags?: array<string, string>,
     *     DimensionFilterList?: list<Shapes\MetricSetDimensionFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
