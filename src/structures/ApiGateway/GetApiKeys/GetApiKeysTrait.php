<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetApiKeys;

trait GetApiKeysTrait
{
    /**
     * @param GetApiKeysRequest $args
     * @return GetApiKeysResponse
     */
    public function getApiKeys(GetApiKeysRequest $args)
    {
        $result = parent::getApiKeys($args->toArray());
        return new GetApiKeysResponse($result->toArray());
    }
}
