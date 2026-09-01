<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateCustomDetectionRuleAssociation;

trait CreateCustomDetectionRuleAssociationTrait
{
    /**
     * @param CreateCustomDetectionRuleAssociationRequest $args
     * @return CreateCustomDetectionRuleAssociationResponse
     */
    public function createCustomDetectionRuleAssociation(CreateCustomDetectionRuleAssociationRequest $args)
    {
        $result = parent::createCustomDetectionRuleAssociation($args->toArray());
        return new CreateCustomDetectionRuleAssociationResponse($result->toArray());
    }
}
