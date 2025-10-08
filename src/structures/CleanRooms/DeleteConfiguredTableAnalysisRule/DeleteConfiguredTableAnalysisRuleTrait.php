<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteConfiguredTableAnalysisRule;

trait DeleteConfiguredTableAnalysisRuleTrait
{
    /**
     * @param DeleteConfiguredTableAnalysisRuleRequest $args
     * @return DeleteConfiguredTableAnalysisRuleResponse
     */
    public function deleteConfiguredTableAnalysisRule(DeleteConfiguredTableAnalysisRuleRequest $args)
    {
        $result = parent::deleteConfiguredTableAnalysisRule($args->toArray());
        return new DeleteConfiguredTableAnalysisRuleResponse($result->toArray());
    }
}
