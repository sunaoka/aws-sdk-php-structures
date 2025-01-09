<?php

namespace Sunaoka\Aws\Structures\SageMakerMetrics\BatchPutMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'METRIC_LIMIT_EXCEEDED'|'INTERNAL_ERROR'|'VALIDATION_ERROR'|'CONFLICT_ERROR' $Code
 * @property int $MetricIndex
 */
class BatchPutMetricsError extends Shape
{
    /**
     * @param array{
     *     Code?: 'METRIC_LIMIT_EXCEEDED'|'INTERNAL_ERROR'|'VALIDATION_ERROR'|'CONFLICT_ERROR',
     *     MetricIndex?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
