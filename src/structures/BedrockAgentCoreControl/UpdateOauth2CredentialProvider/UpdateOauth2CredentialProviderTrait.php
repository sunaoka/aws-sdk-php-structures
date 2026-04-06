<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider;

trait UpdateOauth2CredentialProviderTrait
{
    /**
     * @param UpdateOauth2CredentialProviderRequest $args
     * @return UpdateOauth2CredentialProviderResponse
     */
    public function updateOauth2CredentialProvider(UpdateOauth2CredentialProviderRequest $args)
    {
        $result = parent::updateOauth2CredentialProvider($args->toArray());
        return new UpdateOauth2CredentialProviderResponse($result->toArray());
    }
}
