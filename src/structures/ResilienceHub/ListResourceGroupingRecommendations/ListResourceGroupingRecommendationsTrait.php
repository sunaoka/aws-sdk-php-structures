<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListResourceGroupingRecommendations;

trait ListResourceGroupingRecommendationsTrait
{
    /**
     * @param ListResourceGroupingRecommendationsRequest $args
     * @return ListResourceGroupingRecommendationsResponse
     */
    public function listResourceGroupingRecommendations(ListResourceGroupingRecommendationsRequest $args)
    {
        $result = parent::listResourceGroupingRecommendations($args->toArray());
        return new ListResourceGroupingRecommendationsResponse($result->toArray());
    }
}
