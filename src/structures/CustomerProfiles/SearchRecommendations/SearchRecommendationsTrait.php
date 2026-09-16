<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\SearchRecommendations;

trait SearchRecommendationsTrait
{
    /**
     * @param SearchRecommendationsRequest $args
     * @return SearchRecommendationsResponse
     */
    public function searchRecommendations(SearchRecommendationsRequest $args)
    {
        $result = parent::searchRecommendations($args->toArray());
        return new SearchRecommendationsResponse($result->toArray());
    }
}
