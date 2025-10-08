<?php

namespace Sunaoka\Aws\Structures\Glue\CancelDataQualityRuleRecommendationRun;

trait CancelDataQualityRuleRecommendationRunTrait
{
    /**
     * @param CancelDataQualityRuleRecommendationRunRequest $args
     * @return CancelDataQualityRuleRecommendationRunResponse
     */
    public function cancelDataQualityRuleRecommendationRun(CancelDataQualityRuleRecommendationRunRequest $args)
    {
        $result = parent::cancelDataQualityRuleRecommendationRun($args->toArray());
        return new CancelDataQualityRuleRecommendationRunResponse($result->toArray());
    }
}
