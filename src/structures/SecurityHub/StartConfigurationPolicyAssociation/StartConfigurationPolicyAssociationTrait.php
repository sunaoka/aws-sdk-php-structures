<?php

namespace Sunaoka\Aws\Structures\SecurityHub\StartConfigurationPolicyAssociation;

trait StartConfigurationPolicyAssociationTrait
{
    /**
     * @param StartConfigurationPolicyAssociationRequest $args
     * @return StartConfigurationPolicyAssociationResponse
     */
    public function startConfigurationPolicyAssociation(StartConfigurationPolicyAssociationRequest $args)
    {
        $result = parent::startConfigurationPolicyAssociation($args->toArray());
        return new StartConfigurationPolicyAssociationResponse($result->toArray());
    }
}
