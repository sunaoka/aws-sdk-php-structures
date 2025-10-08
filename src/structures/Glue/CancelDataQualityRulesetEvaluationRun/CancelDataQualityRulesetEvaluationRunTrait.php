<?php

namespace Sunaoka\Aws\Structures\Glue\CancelDataQualityRulesetEvaluationRun;

trait CancelDataQualityRulesetEvaluationRunTrait
{
    /**
     * @param CancelDataQualityRulesetEvaluationRunRequest $args
     * @return CancelDataQualityRulesetEvaluationRunResponse
     */
    public function cancelDataQualityRulesetEvaluationRun(CancelDataQualityRulesetEvaluationRunRequest $args)
    {
        $result = parent::cancelDataQualityRulesetEvaluationRun($args->toArray());
        return new CancelDataQualityRulesetEvaluationRunResponse($result->toArray());
    }
}
