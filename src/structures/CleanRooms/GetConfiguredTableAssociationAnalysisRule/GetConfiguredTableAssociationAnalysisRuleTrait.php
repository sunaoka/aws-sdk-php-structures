<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTableAssociationAnalysisRule;

trait GetConfiguredTableAssociationAnalysisRuleTrait
{
    /**
     * @param GetConfiguredTableAssociationAnalysisRuleRequest $args
     * @return GetConfiguredTableAssociationAnalysisRuleResponse
     */
    public function getConfiguredTableAssociationAnalysisRule(GetConfiguredTableAssociationAnalysisRuleRequest $args)
    {
        $result = parent::getConfiguredTableAssociationAnalysisRule($args->toArray());
        return new GetConfiguredTableAssociationAnalysisRuleResponse($result->toArray());
    }
}
