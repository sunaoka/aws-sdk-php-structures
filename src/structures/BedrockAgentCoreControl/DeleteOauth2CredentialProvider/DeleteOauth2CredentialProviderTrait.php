<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteOauth2CredentialProvider;

trait DeleteOauth2CredentialProviderTrait
{
    /**
     * @param DeleteOauth2CredentialProviderRequest $args
     * @return DeleteOauth2CredentialProviderResponse
     */
    public function deleteOauth2CredentialProvider(DeleteOauth2CredentialProviderRequest $args)
    {
        $result = parent::deleteOauth2CredentialProvider($args->toArray());
        return new DeleteOauth2CredentialProviderResponse($result->toArray());
    }
}
