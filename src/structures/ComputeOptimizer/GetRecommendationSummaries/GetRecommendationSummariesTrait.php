<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries;

trait GetRecommendationSummariesTrait
{
    /**
     * @param GetRecommendationSummariesRequest $args
     * @return GetRecommendationSummariesResponse
     */
    public function getRecommendationSummaries(GetRecommendationSummariesRequest $args)
    {
        $result = parent::getRecommendationSummaries($args->toArray());
        return new GetRecommendationSummariesResponse($result->toArray());
    }
}
