<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRuleRecommendationRuns;

trait ListDataQualityRuleRecommendationRunsTrait
{
    /**
     * @param ListDataQualityRuleRecommendationRunsRequest $args
     * @return ListDataQualityRuleRecommendationRunsResponse
     */
    public function listDataQualityRuleRecommendationRuns(ListDataQualityRuleRecommendationRunsRequest $args)
    {
        $result = parent::listDataQualityRuleRecommendationRuns($args->toArray());
        return new ListDataQualityRuleRecommendationRunsResponse($result->toArray());
    }
}
