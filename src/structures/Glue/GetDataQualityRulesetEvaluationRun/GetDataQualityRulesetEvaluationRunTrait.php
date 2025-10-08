<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRulesetEvaluationRun;

trait GetDataQualityRulesetEvaluationRunTrait
{
    /**
     * @param GetDataQualityRulesetEvaluationRunRequest $args
     * @return GetDataQualityRulesetEvaluationRunResponse
     */
    public function getDataQualityRulesetEvaluationRun(GetDataQualityRulesetEvaluationRunRequest $args)
    {
        $result = parent::getDataQualityRulesetEvaluationRun($args->toArray());
        return new GetDataQualityRulesetEvaluationRunResponse($result->toArray());
    }
}
