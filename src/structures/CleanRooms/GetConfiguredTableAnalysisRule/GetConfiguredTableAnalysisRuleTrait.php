<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTableAnalysisRule;

trait GetConfiguredTableAnalysisRuleTrait
{
    /**
     * @param GetConfiguredTableAnalysisRuleRequest $args
     * @return GetConfiguredTableAnalysisRuleResponse
     */
    public function getConfiguredTableAnalysisRule(GetConfiguredTableAnalysisRuleRequest $args)
    {
        $result = parent::getConfiguredTableAnalysisRule($args->toArray());
        return new GetConfiguredTableAnalysisRuleResponse($result->toArray());
    }
}
