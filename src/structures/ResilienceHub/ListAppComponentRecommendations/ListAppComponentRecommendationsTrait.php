<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppComponentRecommendations;

trait ListAppComponentRecommendationsTrait
{
    /**
     * @param ListAppComponentRecommendationsRequest $args
     * @return ListAppComponentRecommendationsResponse
     */
    public function listAppComponentRecommendations(ListAppComponentRecommendationsRequest $args)
    {
        $result = parent::listAppComponentRecommendations($args->toArray());
        return new ListAppComponentRecommendationsResponse($result->toArray());
    }
}
