<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\RejectResourceGroupingRecommendations;

trait RejectResourceGroupingRecommendationsTrait
{
    /**
     * @param RejectResourceGroupingRecommendationsRequest $args
     * @return RejectResourceGroupingRecommendationsResponse
     */
    public function rejectResourceGroupingRecommendations(RejectResourceGroupingRecommendationsRequest $args)
    {
        $result = parent::rejectResourceGroupingRecommendations($args->toArray());
        return new RejectResourceGroupingRecommendationsResponse($result->toArray());
    }
}
