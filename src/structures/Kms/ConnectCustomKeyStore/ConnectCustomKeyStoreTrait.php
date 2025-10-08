<?php

namespace Sunaoka\Aws\Structures\Kms\ConnectCustomKeyStore;

trait ConnectCustomKeyStoreTrait
{
    /**
     * @param ConnectCustomKeyStoreRequest $args
     * @return ConnectCustomKeyStoreResponse
     */
    public function connectCustomKeyStore(ConnectCustomKeyStoreRequest $args)
    {
        $result = parent::connectCustomKeyStore($args->toArray());
        return new ConnectCustomKeyStoreResponse($result->toArray());
    }
}
