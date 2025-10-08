<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationPreferences;

trait GetRecommendationPreferencesTrait
{
    /**
     * @param GetRecommendationPreferencesRequest $args
     * @return GetRecommendationPreferencesResponse
     */
    public function getRecommendationPreferences(GetRecommendationPreferencesRequest $args)
    {
        $result = parent::getRecommendationPreferences($args->toArray());
        return new GetRecommendationPreferencesResponse($result->toArray());
    }
}
