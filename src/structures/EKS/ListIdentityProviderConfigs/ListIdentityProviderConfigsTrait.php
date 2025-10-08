<?php

namespace Sunaoka\Aws\Structures\EKS\ListIdentityProviderConfigs;

trait ListIdentityProviderConfigsTrait
{
    /**
     * @param ListIdentityProviderConfigsRequest $args
     * @return ListIdentityProviderConfigsResponse
     */
    public function listIdentityProviderConfigs(ListIdentityProviderConfigsRequest $args)
    {
        $result = parent::listIdentityProviderConfigs($args->toArray());
        return new ListIdentityProviderConfigsResponse($result->toArray());
    }
}
