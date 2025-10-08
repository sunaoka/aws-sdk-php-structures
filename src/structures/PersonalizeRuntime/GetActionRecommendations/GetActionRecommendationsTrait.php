<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetActionRecommendations;

trait GetActionRecommendationsTrait
{
    /**
     * @param GetActionRecommendationsRequest $args
     * @return GetActionRecommendationsResponse
     */
    public function getActionRecommendations(GetActionRecommendationsRequest $args)
    {
        $result = parent::getActionRecommendations($args->toArray());
        return new GetActionRecommendationsResponse($result->toArray());
    }
}
