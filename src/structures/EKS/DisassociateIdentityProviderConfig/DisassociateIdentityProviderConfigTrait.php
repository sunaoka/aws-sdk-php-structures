<?php

namespace Sunaoka\Aws\Structures\EKS\DisassociateIdentityProviderConfig;

trait DisassociateIdentityProviderConfigTrait
{
    /**
     * @param DisassociateIdentityProviderConfigRequest $args
     * @return DisassociateIdentityProviderConfigResponse
     */
    public function disassociateIdentityProviderConfig(DisassociateIdentityProviderConfigRequest $args)
    {
        $result = parent::disassociateIdentityProviderConfig($args->toArray());
        return new DisassociateIdentityProviderConfigResponse($result->toArray());
    }
}
