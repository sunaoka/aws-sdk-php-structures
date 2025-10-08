<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendationProjectedMetrics;

trait GetECSServiceRecommendationProjectedMetricsTrait
{
    /**
     * @param GetECSServiceRecommendationProjectedMetricsRequest $args
     * @return GetECSServiceRecommendationProjectedMetricsResponse
     */
    public function getECSServiceRecommendationProjectedMetrics(
        GetECSServiceRecommendationProjectedMetricsRequest $args,
    ) {
        $result = parent::getECSServiceRecommendationProjectedMetrics($args->toArray());
        return new GetECSServiceRecommendationProjectedMetricsResponse($result->toArray());
    }
}
