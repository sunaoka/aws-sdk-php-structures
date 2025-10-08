<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRuleRecommendationRun;

trait GetDataQualityRuleRecommendationRunTrait
{
    /**
     * @param GetDataQualityRuleRecommendationRunRequest $args
     * @return GetDataQualityRuleRecommendationRunResponse
     */
    public function getDataQualityRuleRecommendationRun(GetDataQualityRuleRecommendationRunRequest $args)
    {
        $result = parent::getDataQualityRuleRecommendationRun($args->toArray());
        return new GetDataQualityRuleRecommendationRunResponse($result->toArray());
    }
}
