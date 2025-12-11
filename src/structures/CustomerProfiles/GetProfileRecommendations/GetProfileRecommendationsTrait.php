<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileRecommendations;

trait GetProfileRecommendationsTrait
{
    /**
     * @param GetProfileRecommendationsRequest $args
     * @return GetProfileRecommendationsResponse
     */
    public function getProfileRecommendations(GetProfileRecommendationsRequest $args)
    {
        $result = parent::getProfileRecommendations($args->toArray());
        return new GetProfileRecommendationsResponse($result->toArray());
    }
}
