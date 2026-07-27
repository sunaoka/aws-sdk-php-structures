<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityRulesetEvaluationRun;

trait BatchGetDataQualityRulesetEvaluationRunTrait
{
    /**
     * @param BatchGetDataQualityRulesetEvaluationRunRequest $args
     * @return BatchGetDataQualityRulesetEvaluationRunResponse
     */
    public function batchGetDataQualityRulesetEvaluationRun(BatchGetDataQualityRulesetEvaluationRunRequest $args)
    {
        $result = parent::batchGetDataQualityRulesetEvaluationRun($args->toArray());
        return new BatchGetDataQualityRulesetEvaluationRunResponse($result->toArray());
    }
}
