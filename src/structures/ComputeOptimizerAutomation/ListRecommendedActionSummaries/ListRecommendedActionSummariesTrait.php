<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListRecommendedActionSummaries;

trait ListRecommendedActionSummariesTrait
{
    /**
     * @param ListRecommendedActionSummariesRequest $args
     * @return ListRecommendedActionSummariesResponse
     */
    public function listRecommendedActionSummaries(ListRecommendedActionSummariesRequest $args)
    {
        $result = parent::listRecommendedActionSummaries($args->toArray());
        return new ListRecommendedActionSummariesResponse($result->toArray());
    }
}
