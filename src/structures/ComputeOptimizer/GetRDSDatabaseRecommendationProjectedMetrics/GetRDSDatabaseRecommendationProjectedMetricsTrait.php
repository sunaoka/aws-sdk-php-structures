<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendationProjectedMetrics;

trait GetRDSDatabaseRecommendationProjectedMetricsTrait
{
    /**
     * @param GetRDSDatabaseRecommendationProjectedMetricsRequest $args
     * @return GetRDSDatabaseRecommendationProjectedMetricsResponse
     */
    public function getRDSDatabaseRecommendationProjectedMetrics(GetRDSDatabaseRecommendationProjectedMetricsRequest $args)
    {
        $result = parent::getRDSDatabaseRecommendationProjectedMetrics($args->toArray());
        return new GetRDSDatabaseRecommendationProjectedMetricsResponse($result->toArray());
    }
}
