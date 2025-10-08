<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetApiKey;

trait GetApiKeyTrait
{
    /**
     * @param GetApiKeyRequest $args
     * @return GetApiKeyResponse
     */
    public function getApiKey(GetApiKeyRequest $args)
    {
        $result = parent::getApiKey($args->toArray());
        return new GetApiKeyResponse($result->toArray());
    }
}
