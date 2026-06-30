<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTableAnalysisRule;

trait CreateIntermediateTableAnalysisRuleTrait
{
    /**
     * @param CreateIntermediateTableAnalysisRuleRequest $args
     * @return CreateIntermediateTableAnalysisRuleResponse
     */
    public function createIntermediateTableAnalysisRule(CreateIntermediateTableAnalysisRuleRequest $args)
    {
        $result = parent::createIntermediateTableAnalysisRule($args->toArray());
        return new CreateIntermediateTableAnalysisRuleResponse($result->toArray());
    }
}
