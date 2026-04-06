<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetApiKeyCredentialProvider;

trait GetApiKeyCredentialProviderTrait
{
    /**
     * @param GetApiKeyCredentialProviderRequest $args
     * @return GetApiKeyCredentialProviderResponse
     */
    public function getApiKeyCredentialProvider(GetApiKeyCredentialProviderRequest $args)
    {
        $result = parent::getApiKeyCredentialProvider($args->toArray());
        return new GetApiKeyCredentialProviderResponse($result->toArray());
    }
}
