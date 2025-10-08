<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesetEvaluationRuns;

trait ListDataQualityRulesetEvaluationRunsTrait
{
    /**
     * @param ListDataQualityRulesetEvaluationRunsRequest $args
     * @return ListDataQualityRulesetEvaluationRunsResponse
     */
    public function listDataQualityRulesetEvaluationRuns(ListDataQualityRulesetEvaluationRunsRequest $args)
    {
        $result = parent::listDataQualityRulesetEvaluationRuns($args->toArray());
        return new ListDataQualityRulesetEvaluationRunsResponse($result->toArray());
    }
}
