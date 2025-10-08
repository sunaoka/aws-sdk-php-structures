<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAssociationAnalysisRule;

trait UpdateConfiguredTableAssociationAnalysisRuleTrait
{
    /**
     * @param UpdateConfiguredTableAssociationAnalysisRuleRequest $args
     * @return UpdateConfiguredTableAssociationAnalysisRuleResponse
     */
    public function updateConfiguredTableAssociationAnalysisRule(
        UpdateConfiguredTableAssociationAnalysisRuleRequest $args,
    ) {
        $result = parent::updateConfiguredTableAssociationAnalysisRule($args->toArray());
        return new UpdateConfiguredTableAssociationAnalysisRuleResponse($result->toArray());
    }
}
