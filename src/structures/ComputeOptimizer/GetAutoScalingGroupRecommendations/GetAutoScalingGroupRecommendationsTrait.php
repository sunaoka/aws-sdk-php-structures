<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations;

trait GetAutoScalingGroupRecommendationsTrait
{
    /**
     * @param GetAutoScalingGroupRecommendationsRequest $args
     * @return GetAutoScalingGroupRecommendationsResponse
     */
    public function getAutoScalingGroupRecommendations(GetAutoScalingGroupRecommendationsRequest $args)
    {
        $result = parent::getAutoScalingGroupRecommendations($args->toArray());
        return new GetAutoScalingGroupRecommendationsResponse($result->toArray());
    }
}
