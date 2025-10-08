<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOauth2CredentialProvider;

trait GetOauth2CredentialProviderTrait
{
    /**
     * @param GetOauth2CredentialProviderRequest $args
     * @return GetOauth2CredentialProviderResponse
     */
    public function getOauth2CredentialProvider(GetOauth2CredentialProviderRequest $args)
    {
        $result = parent::getOauth2CredentialProvider($args->toArray());
        return new GetOauth2CredentialProviderResponse($result->toArray());
    }
}
