<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListTestRecommendations;

trait ListTestRecommendationsTrait
{
    /**
     * @param ListTestRecommendationsRequest $args
     * @return ListTestRecommendationsResponse
     */
    public function listTestRecommendations(ListTestRecommendationsRequest $args)
    {
        $result = parent::listTestRecommendations($args->toArray());
        return new ListTestRecommendationsResponse($result->toArray());
    }
}
