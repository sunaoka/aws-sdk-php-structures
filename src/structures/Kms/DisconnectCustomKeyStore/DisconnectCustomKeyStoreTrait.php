<?php

namespace Sunaoka\Aws\Structures\Kms\DisconnectCustomKeyStore;

trait DisconnectCustomKeyStoreTrait
{
    /**
     * @param DisconnectCustomKeyStoreRequest $args
     * @return DisconnectCustomKeyStoreResponse
     */
    public function disconnectCustomKeyStore(DisconnectCustomKeyStoreRequest $args)
    {
        $result = parent::disconnectCustomKeyStore($args->toArray());
        return new DisconnectCustomKeyStoreResponse($result->toArray());
    }
}
