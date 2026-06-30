<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIntermediateTableAnalysisRule;

trait GetIntermediateTableAnalysisRuleTrait
{
    /**
     * @param GetIntermediateTableAnalysisRuleRequest $args
     * @return GetIntermediateTableAnalysisRuleResponse
     */
    public function getIntermediateTableAnalysisRule(GetIntermediateTableAnalysisRuleRequest $args)
    {
        $result = parent::getIntermediateTableAnalysisRule($args->toArray());
        return new GetIntermediateTableAnalysisRuleResponse($result->toArray());
    }
}
