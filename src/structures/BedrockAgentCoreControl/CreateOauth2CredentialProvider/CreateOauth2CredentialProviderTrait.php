<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOauth2CredentialProvider;

trait CreateOauth2CredentialProviderTrait
{
    /**
     * @param CreateOauth2CredentialProviderRequest $args
     * @return CreateOauth2CredentialProviderResponse
     */
    public function createOauth2CredentialProvider(CreateOauth2CredentialProviderRequest $args)
    {
        $result = parent::createOauth2CredentialProvider($args->toArray());
        return new CreateOauth2CredentialProviderResponse($result->toArray());
    }
}
