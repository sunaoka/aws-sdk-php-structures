<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApiKey;

trait CreateApiKeyTrait
{
    /**
     * @param CreateApiKeyRequest $args
     * @return CreateApiKeyResponse
     */
    public function createApiKey(CreateApiKeyRequest $args)
    {
        $result = parent::createApiKey($args->toArray());
        return new CreateApiKeyResponse($result->toArray());
    }
}
