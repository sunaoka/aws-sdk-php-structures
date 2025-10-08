<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListOauth2CredentialProviders;

trait ListOauth2CredentialProvidersTrait
{
    /**
     * @param ListOauth2CredentialProvidersRequest $args
     * @return ListOauth2CredentialProvidersResponse
     */
    public function listOauth2CredentialProviders(ListOauth2CredentialProvidersRequest $args)
    {
        $result = parent::listOauth2CredentialProviders($args->toArray());
        return new ListOauth2CredentialProvidersResponse($result->toArray());
    }
}
