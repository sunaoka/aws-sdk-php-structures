<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateMetricSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string $MetricSetName
 * @property string|null $MetricSetDescription
 * @property list<Shapes\Metric> $MetricList
 * @property int<0, 432000>|null $Offset
 * @property Shapes\TimestampColumn|null $TimestampColumn
 * @property list<string>|null $DimensionList
 * @property 'P1D'|'PT1H'|'PT10M'|'PT5M'|null $MetricSetFrequency
 * @property Shapes\MetricSource $MetricSource
 * @property string|null $Timezone
 * @property array<string, string>|null $Tags
 * @property list<Shapes\MetricSetDimensionFilter>|null $DimensionFilterList
 */
class CreateMetricSetRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     MetricSetName: string,
     *     MetricSetDescription?: string|null,
     *     MetricList: list<Shapes\Metric>,
     *     Offset?: int<0, 432000>|null,
     *     TimestampColumn?: Shapes\TimestampColumn|null,
     *     DimensionList?: list<string>|null,
     *     MetricSetFrequency?: 'P1D'|'PT1H'|'PT10M'|'PT5M'|null,
     *     MetricSource: Shapes\MetricSource,
     *     Timezone?: string|null,
     *     Tags?: array<string, string>|null,
     *     DimensionFilterList?: list<Shapes\MetricSetDimensionFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
