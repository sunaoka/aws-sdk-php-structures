<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteApiKeyCredentialProvider;

trait DeleteApiKeyCredentialProviderTrait
{
    /**
     * @param DeleteApiKeyCredentialProviderRequest $args
     * @return DeleteApiKeyCredentialProviderResponse
     */
    public function deleteApiKeyCredentialProvider(DeleteApiKeyCredentialProviderRequest $args)
    {
        $result = parent::deleteApiKeyCredentialProvider($args->toArray());
        return new DeleteApiKeyCredentialProviderResponse($result->toArray());
    }
}
