<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicyAssociation;

trait GetConfigurationPolicyAssociationTrait
{
    /**
     * @param GetConfigurationPolicyAssociationRequest $args
     * @return GetConfigurationPolicyAssociationResponse
     */
    public function getConfigurationPolicyAssociation(GetConfigurationPolicyAssociationRequest $args)
    {
        $result = parent::getConfigurationPolicyAssociation($args->toArray());
        return new GetConfigurationPolicyAssociationResponse($result->toArray());
    }
}
