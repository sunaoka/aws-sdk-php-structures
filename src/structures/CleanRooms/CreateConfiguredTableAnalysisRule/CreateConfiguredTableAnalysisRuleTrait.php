<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTableAnalysisRule;

trait CreateConfiguredTableAnalysisRuleTrait
{
    /**
     * @param CreateConfiguredTableAnalysisRuleRequest $args
     * @return CreateConfiguredTableAnalysisRuleResponse
     */
    public function createConfiguredTableAnalysisRule(CreateConfiguredTableAnalysisRuleRequest $args)
    {
        $result = parent::createConfiguredTableAnalysisRule($args->toArray());
        return new CreateConfiguredTableAnalysisRuleResponse($result->toArray());
    }
}
