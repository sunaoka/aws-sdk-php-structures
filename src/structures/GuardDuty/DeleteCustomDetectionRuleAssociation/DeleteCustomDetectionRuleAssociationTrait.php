<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteCustomDetectionRuleAssociation;

trait DeleteCustomDetectionRuleAssociationTrait
{
    /**
     * @param DeleteCustomDetectionRuleAssociationRequest $args
     * @return DeleteCustomDetectionRuleAssociationResponse
     */
    public function deleteCustomDetectionRuleAssociation(DeleteCustomDetectionRuleAssociationRequest $args)
    {
        $result = parent::deleteCustomDetectionRuleAssociation($args->toArray());
        return new DeleteCustomDetectionRuleAssociationResponse($result->toArray());
    }
}
