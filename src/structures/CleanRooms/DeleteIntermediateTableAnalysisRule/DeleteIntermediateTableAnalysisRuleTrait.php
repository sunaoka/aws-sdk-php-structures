<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteIntermediateTableAnalysisRule;

trait DeleteIntermediateTableAnalysisRuleTrait
{
    /**
     * @param DeleteIntermediateTableAnalysisRuleRequest $args
     * @return DeleteIntermediateTableAnalysisRuleResponse
     */
    public function deleteIntermediateTableAnalysisRule(DeleteIntermediateTableAnalysisRuleRequest $args)
    {
        $result = parent::deleteIntermediateTableAnalysisRule($args->toArray());
        return new DeleteIntermediateTableAnalysisRuleResponse($result->toArray());
    }
}
