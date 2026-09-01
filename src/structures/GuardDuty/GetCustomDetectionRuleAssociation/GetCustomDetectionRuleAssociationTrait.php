<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCustomDetectionRuleAssociation;

trait GetCustomDetectionRuleAssociationTrait
{
    /**
     * @param GetCustomDetectionRuleAssociationRequest $args
     * @return GetCustomDetectionRuleAssociationResponse
     */
    public function getCustomDetectionRuleAssociation(GetCustomDetectionRuleAssociationRequest $args)
    {
        $result = parent::getCustomDetectionRuleAssociation($args->toArray());
        return new GetCustomDetectionRuleAssociationResponse($result->toArray());
    }
}
