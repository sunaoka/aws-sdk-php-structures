<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupTimeSeries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TimeSeriesId
 * @property list<DimensionNameValue> $DimensionList
 * @property list<double> $MetricValueList
 */
class TimeSeries extends Shape
{
    /**
     * @param array{
     *     TimeSeriesId: string,
     *     DimensionList: list<DimensionNameValue>,
     *     MetricValueList: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
