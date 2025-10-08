<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2RecommendationProjectedMetrics;

trait GetEC2RecommendationProjectedMetricsTrait
{
    /**
     * @param GetEC2RecommendationProjectedMetricsRequest $args
     * @return GetEC2RecommendationProjectedMetricsResponse
     */
    public function getEC2RecommendationProjectedMetrics(GetEC2RecommendationProjectedMetricsRequest $args)
    {
        $result = parent::getEC2RecommendationProjectedMetrics($args->toArray());
        return new GetEC2RecommendationProjectedMetricsResponse($result->toArray());
    }
}
