<?php

namespace Sunaoka\Aws\Structures\EKS\AssociateIdentityProviderConfig;

trait AssociateIdentityProviderConfigTrait
{
    /**
     * @param AssociateIdentityProviderConfigRequest $args
     * @return AssociateIdentityProviderConfigResponse
     */
    public function associateIdentityProviderConfig(AssociateIdentityProviderConfigRequest $args)
    {
        $result = parent::associateIdentityProviderConfig($args->toArray());
        return new AssociateIdentityProviderConfigResponse($result->toArray());
    }
}
