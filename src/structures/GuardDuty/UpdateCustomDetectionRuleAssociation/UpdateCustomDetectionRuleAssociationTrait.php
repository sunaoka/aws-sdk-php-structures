<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateCustomDetectionRuleAssociation;

trait UpdateCustomDetectionRuleAssociationTrait
{
    /**
     * @param UpdateCustomDetectionRuleAssociationRequest $args
     * @return UpdateCustomDetectionRuleAssociationResponse
     */
    public function updateCustomDetectionRuleAssociation(UpdateCustomDetectionRuleAssociationRequest $args)
    {
        $result = parent::updateCustomDetectionRuleAssociation($args->toArray());
        return new UpdateCustomDetectionRuleAssociationResponse($result->toArray());
    }
}
