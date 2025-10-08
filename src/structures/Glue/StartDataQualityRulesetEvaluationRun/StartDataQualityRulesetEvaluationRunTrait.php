<?php

namespace Sunaoka\Aws\Structures\Glue\StartDataQualityRulesetEvaluationRun;

trait StartDataQualityRulesetEvaluationRunTrait
{
    /**
     * @param StartDataQualityRulesetEvaluationRunRequest $args
     * @return StartDataQualityRulesetEvaluationRunResponse
     */
    public function startDataQualityRulesetEvaluationRun(StartDataQualityRulesetEvaluationRunRequest $args)
    {
        $result = parent::startDataQualityRulesetEvaluationRun($args->toArray());
        return new StartDataQualityRulesetEvaluationRunResponse($result->toArray());
    }
}
