<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations;

trait GetIdleRecommendationsTrait
{
    /**
     * @param GetIdleRecommendationsRequest $args
     * @return GetIdleRecommendationsResponse
     */
    public function getIdleRecommendations(GetIdleRecommendationsRequest $args)
    {
        $result = parent::getIdleRecommendations($args->toArray());
        return new GetIdleRecommendationsResponse($result->toArray());
    }
}
