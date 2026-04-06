<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property 'AVG'|'SUM' $AggregationFunction
 * @property string|null $Namespace
 */
class Metric extends Shape
{
    /**
     * @param array{
     *     MetricName: string,
     *     AggregationFunction: 'AVG'|'SUM',
     *     Namespace?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
