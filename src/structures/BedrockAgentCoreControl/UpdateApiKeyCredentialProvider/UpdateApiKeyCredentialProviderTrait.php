<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateApiKeyCredentialProvider;

trait UpdateApiKeyCredentialProviderTrait
{
    /**
     * @param UpdateApiKeyCredentialProviderRequest $args
     * @return UpdateApiKeyCredentialProviderResponse
     */
    public function updateApiKeyCredentialProvider(UpdateApiKeyCredentialProviderRequest $args)
    {
        $result = parent::updateApiKeyCredentialProvider($args->toArray());
        return new UpdateApiKeyCredentialProviderResponse($result->toArray());
    }
}
