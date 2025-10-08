<?php

namespace Sunaoka\Aws\Structures\SageMakerMetrics\BatchGetMetrics;

trait BatchGetMetricsTrait
{
    /**
     * @param BatchGetMetricsRequest $args
     * @return BatchGetMetricsResponse
     */
    public function batchGetMetrics(BatchGetMetricsRequest $args)
    {
        $result = parent::batchGetMetrics($args->toArray());
        return new BatchGetMetricsResponse($result->toArray());
    }
}
