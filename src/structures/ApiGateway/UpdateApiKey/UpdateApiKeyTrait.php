<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateApiKey;

trait UpdateApiKeyTrait
{
    /**
     * @param UpdateApiKeyRequest $args
     * @return UpdateApiKeyResponse
     */
    public function updateApiKey(UpdateApiKeyRequest $args)
    {
        $result = parent::updateApiKey($args->toArray());
        return new UpdateApiKeyResponse($result->toArray());
    }
}
