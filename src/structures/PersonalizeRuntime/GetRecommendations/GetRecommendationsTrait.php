<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetRecommendations;

trait GetRecommendationsTrait
{
    /**
     * @param GetRecommendationsRequest $args
     * @return GetRecommendationsResponse
     */
    public function getRecommendations(GetRecommendationsRequest $args)
    {
        $result = parent::getRecommendations($args->toArray());
        return new GetRecommendationsResponse($result->toArray());
    }
}
