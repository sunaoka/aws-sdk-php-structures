<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateMetricSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MetricSetArn
 * @property string|null $MetricSetDescription
 * @property list<Shapes\Metric>|null $MetricList
 * @property int<0, 432000>|null $Offset
 * @property Shapes\TimestampColumn|null $TimestampColumn
 * @property list<string>|null $DimensionList
 * @property 'P1D'|'PT1H'|'PT10M'|'PT5M'|null $MetricSetFrequency
 * @property Shapes\MetricSource|null $MetricSource
 * @property list<Shapes\MetricSetDimensionFilter>|null $DimensionFilterList
 */
class UpdateMetricSetRequest extends Request
{
    /**
     * @param array{
     *     MetricSetArn: string,
     *     MetricSetDescription?: string|null,
     *     MetricList?: list<Shapes\Metric>|null,
     *     Offset?: int<0, 432000>|null,
     *     TimestampColumn?: Shapes\TimestampColumn|null,
     *     DimensionList?: list<string>|null,
     *     MetricSetFrequency?: 'P1D'|'PT1H'|'PT10M'|'PT5M'|null,
     *     MetricSource?: Shapes\MetricSource|null,
     *     DimensionFilterList?: list<Shapes\MetricSetDimensionFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
