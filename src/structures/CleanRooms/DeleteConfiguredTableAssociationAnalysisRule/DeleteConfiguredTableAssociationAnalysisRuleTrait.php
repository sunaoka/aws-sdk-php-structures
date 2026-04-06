<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteConfiguredTableAssociationAnalysisRule;

trait DeleteConfiguredTableAssociationAnalysisRuleTrait
{
    /**
     * @param DeleteConfiguredTableAssociationAnalysisRuleRequest $args
     * @return DeleteConfiguredTableAssociationAnalysisRuleResponse
     */
    public function deleteConfiguredTableAssociationAnalysisRule(DeleteConfiguredTableAssociationAnalysisRuleRequest $args)
    {
        $result = parent::deleteConfiguredTableAssociationAnalysisRule($args->toArray());
        return new DeleteConfiguredTableAssociationAnalysisRuleResponse($result->toArray());
    }
}
