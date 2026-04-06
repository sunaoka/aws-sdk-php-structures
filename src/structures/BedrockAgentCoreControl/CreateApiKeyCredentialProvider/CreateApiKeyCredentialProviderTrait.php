<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateApiKeyCredentialProvider;

trait CreateApiKeyCredentialProviderTrait
{
    /**
     * @param CreateApiKeyCredentialProviderRequest $args
     * @return CreateApiKeyCredentialProviderResponse
     */
    public function createApiKeyCredentialProvider(CreateApiKeyCredentialProviderRequest $args)
    {
        $result = parent::createApiKeyCredentialProvider($args->toArray());
        return new CreateApiKeyCredentialProviderResponse($result->toArray());
    }
}
