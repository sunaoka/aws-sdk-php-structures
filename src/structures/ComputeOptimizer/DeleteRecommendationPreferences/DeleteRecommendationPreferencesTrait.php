<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\DeleteRecommendationPreferences;

trait DeleteRecommendationPreferencesTrait
{
    /**
     * @param DeleteRecommendationPreferencesRequest $args
     * @return DeleteRecommendationPreferencesResponse
     */
    public function deleteRecommendationPreferences(DeleteRecommendationPreferencesRequest $args)
    {
        $result = parent::deleteRecommendationPreferences($args->toArray());
        return new DeleteRecommendationPreferencesResponse($result->toArray());
    }
}
