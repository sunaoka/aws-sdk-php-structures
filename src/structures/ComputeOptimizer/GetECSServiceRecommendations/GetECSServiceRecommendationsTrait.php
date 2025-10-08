<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations;

trait GetECSServiceRecommendationsTrait
{
    /**
     * @param GetECSServiceRecommendationsRequest $args
     * @return GetECSServiceRecommendationsResponse
     */
    public function getECSServiceRecommendations(GetECSServiceRecommendationsRequest $args)
    {
        $result = parent::getECSServiceRecommendations($args->toArray());
        return new GetECSServiceRecommendationsResponse($result->toArray());
    }
}
