<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\AcceptResourceGroupingRecommendations;

trait AcceptResourceGroupingRecommendationsTrait
{
    /**
     * @param AcceptResourceGroupingRecommendationsRequest $args
     * @return AcceptResourceGroupingRecommendationsResponse
     */
    public function acceptResourceGroupingRecommendations(AcceptResourceGroupingRecommendationsRequest $args)
    {
        $result = parent::acceptResourceGroupingRecommendations($args->toArray());
        return new AcceptResourceGroupingRecommendationsResponse($result->toArray());
    }
}
