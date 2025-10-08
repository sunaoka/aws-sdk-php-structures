<?php

namespace Sunaoka\Aws\Structures\SageMakerMetrics\BatchPutMetrics;

trait BatchPutMetricsTrait
{
    /**
     * @param BatchPutMetricsRequest $args
     * @return BatchPutMetricsResponse
     */
    public function batchPutMetrics(BatchPutMetricsRequest $args)
    {
        $result = parent::batchPutMetrics($args->toArray());
        return new BatchPutMetricsResponse($result->toArray());
    }
}
