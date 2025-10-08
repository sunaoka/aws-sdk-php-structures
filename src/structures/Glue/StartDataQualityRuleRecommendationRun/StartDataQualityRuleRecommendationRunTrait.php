<?php

namespace Sunaoka\Aws\Structures\Glue\StartDataQualityRuleRecommendationRun;

trait StartDataQualityRuleRecommendationRunTrait
{
    /**
     * @param StartDataQualityRuleRecommendationRunRequest $args
     * @return StartDataQualityRuleRecommendationRunResponse
     */
    public function startDataQualityRuleRecommendationRun(StartDataQualityRuleRecommendationRunRequest $args)
    {
        $result = parent::startDataQualityRuleRecommendationRun($args->toArray());
        return new StartDataQualityRuleRecommendationRunResponse($result->toArray());
    }
}
