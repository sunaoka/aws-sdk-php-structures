<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteApiKey;

trait DeleteApiKeyTrait
{
    /**
     * @param DeleteApiKeyRequest $args
     * @return void
     */
    public function deleteApiKey(DeleteApiKeyRequest $args)
    {
        parent::deleteApiKey($args->toArray());
    }
}
