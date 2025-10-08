<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAnalysisRule;

trait UpdateConfiguredTableAnalysisRuleTrait
{
    /**
     * @param UpdateConfiguredTableAnalysisRuleRequest $args
     * @return UpdateConfiguredTableAnalysisRuleResponse
     */
    public function updateConfiguredTableAnalysisRule(UpdateConfiguredTableAnalysisRuleRequest $args)
    {
        $result = parent::updateConfiguredTableAnalysisRule($args->toArray());
        return new UpdateConfiguredTableAnalysisRuleResponse($result->toArray());
    }
}
