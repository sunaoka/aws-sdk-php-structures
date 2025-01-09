<?php

namespace Sunaoka\Aws\Structures\SageMakerMetrics\BatchGetMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MetricQuery> $MetricQueries
 */
class BatchGetMetricsRequest extends Request
{
    /**
     * @param array{MetricQueries: list<Shapes\MetricQuery>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
