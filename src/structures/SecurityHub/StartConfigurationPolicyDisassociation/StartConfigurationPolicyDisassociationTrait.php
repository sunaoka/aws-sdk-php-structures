<?php

namespace Sunaoka\Aws\Structures\SecurityHub\StartConfigurationPolicyDisassociation;

trait StartConfigurationPolicyDisassociationTrait
{
    /**
     * @param StartConfigurationPolicyDisassociationRequest $args
     * @return StartConfigurationPolicyDisassociationResponse
     */
    public function startConfigurationPolicyDisassociation(StartConfigurationPolicyDisassociationRequest $args)
    {
        $result = parent::startConfigurationPolicyDisassociation($args->toArray());
        return new StartConfigurationPolicyDisassociationResponse($result->toArray());
    }
}
