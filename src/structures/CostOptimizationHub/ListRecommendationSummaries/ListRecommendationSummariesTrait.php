<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendationSummaries;

trait ListRecommendationSummariesTrait
{
    /**
     * @param ListRecommendationSummariesRequest $args
     * @return ListRecommendationSummariesResponse
     */
    public function listRecommendationSummaries(ListRecommendationSummariesRequest $args)
    {
        $result = parent::listRecommendationSummaries($args->toArray());
        return new ListRecommendationSummariesResponse($result->toArray());
    }
}
