<?php

namespace Sunaoka\Aws\Structures\SageMakerMetrics\BatchGetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Complete'|'Truncated'|'InternalError'|'ValidationError' $Status
 * @property string|null $Message
 * @property list<int> $XAxisValues
 * @property list<double> $MetricValues
 */
class MetricQueryResult extends Shape
{
    /**
     * @param array{
     *     Status: 'Complete'|'Truncated'|'InternalError'|'ValidationError',
     *     Message?: string|null,
     *     XAxisValues: list<int>,
     *     MetricValues: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
