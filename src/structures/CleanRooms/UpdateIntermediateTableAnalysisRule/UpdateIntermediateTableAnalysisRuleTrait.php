<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIntermediateTableAnalysisRule;

trait UpdateIntermediateTableAnalysisRuleTrait
{
    /**
     * @param UpdateIntermediateTableAnalysisRuleRequest $args
     * @return UpdateIntermediateTableAnalysisRuleResponse
     */
    public function updateIntermediateTableAnalysisRule(UpdateIntermediateTableAnalysisRuleRequest $args)
    {
        $result = parent::updateIntermediateTableAnalysisRule($args->toArray());
        return new UpdateIntermediateTableAnalysisRuleResponse($result->toArray());
    }
}
