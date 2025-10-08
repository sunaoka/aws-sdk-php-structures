<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourceApiKey;

trait GetResourceApiKeyTrait
{
    /**
     * @param GetResourceApiKeyRequest $args
     * @return GetResourceApiKeyResponse
     */
    public function getResourceApiKey(GetResourceApiKeyRequest $args)
    {
        $result = parent::getResourceApiKey($args->toArray());
        return new GetResourceApiKeyResponse($result->toArray());
    }
}
