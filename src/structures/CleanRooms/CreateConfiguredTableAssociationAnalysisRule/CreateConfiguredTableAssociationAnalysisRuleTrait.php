<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTableAssociationAnalysisRule;

trait CreateConfiguredTableAssociationAnalysisRuleTrait
{
    /**
     * @param CreateConfiguredTableAssociationAnalysisRuleRequest $args
     * @return CreateConfiguredTableAssociationAnalysisRuleResponse
     */
    public function createConfiguredTableAssociationAnalysisRule(
        CreateConfiguredTableAssociationAnalysisRuleRequest $args,
    ) {
        $result = parent::createConfiguredTableAssociationAnalysisRule($args->toArray());
        return new CreateConfiguredTableAssociationAnalysisRuleResponse($result->toArray());
    }
}
