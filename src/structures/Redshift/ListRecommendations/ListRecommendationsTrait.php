<?php

namespace Sunaoka\Aws\Structures\Redshift\ListRecommendations;

trait ListRecommendationsTrait
{
    /**
     * @param ListRecommendationsRequest $args
     * @return ListRecommendationsResponse
     */
    public function listRecommendations(ListRecommendationsRequest $args)
    {
        $result = parent::listRecommendations($args->toArray());
        return new ListRecommendationsResponse($result->toArray());
    }
}
