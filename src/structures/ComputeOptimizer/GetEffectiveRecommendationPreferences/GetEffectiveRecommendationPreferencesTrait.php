<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEffectiveRecommendationPreferences;

trait GetEffectiveRecommendationPreferencesTrait
{
    /**
     * @param GetEffectiveRecommendationPreferencesRequest $args
     * @return GetEffectiveRecommendationPreferencesResponse
     */
    public function getEffectiveRecommendationPreferences(GetEffectiveRecommendationPreferencesRequest $args)
    {
        $result = parent::getEffectiveRecommendationPreferences($args->toArray());
        return new GetEffectiveRecommendationPreferencesResponse($result->toArray());
    }
}
