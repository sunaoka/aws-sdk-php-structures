<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteApiKey;

trait DeleteApiKeyTrait
{
    /**
     * @param DeleteApiKeyRequest $args
     * @return DeleteApiKeyResponse
     */
    public function deleteApiKey(DeleteApiKeyRequest $args)
    {
        $result = parent::deleteApiKey($args->toArray());
        return new DeleteApiKeyResponse($result->toArray());
    }
}
