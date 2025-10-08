<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\PutRecommendationPreferences;

trait PutRecommendationPreferencesTrait
{
    /**
     * @param PutRecommendationPreferencesRequest $args
     * @return PutRecommendationPreferencesResponse
     */
    public function putRecommendationPreferences(PutRecommendationPreferencesRequest $args)
    {
        $result = parent::putRecommendationPreferences($args->toArray());
        return new PutRecommendationPreferencesResponse($result->toArray());
    }
}
