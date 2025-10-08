<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListSopRecommendations;

trait ListSopRecommendationsTrait
{
    /**
     * @param ListSopRecommendationsRequest $args
     * @return ListSopRecommendationsResponse
     */
    public function listSopRecommendations(ListSopRecommendationsRequest $args)
    {
        $result = parent::listSopRecommendations($args->toArray());
        return new ListSopRecommendationsResponse($result->toArray());
    }
}
