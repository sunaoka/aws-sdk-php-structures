<?php

namespace Sunaoka\Aws\Structures\Kms\CreateCustomKeyStore;

trait CreateCustomKeyStoreTrait
{
    /**
     * @param CreateCustomKeyStoreRequest $args
     * @return CreateCustomKeyStoreResponse
     */
    public function createCustomKeyStore(CreateCustomKeyStoreRequest $args)
    {
        $result = parent::createCustomKeyStore($args->toArray());
        return new CreateCustomKeyStoreResponse($result->toArray());
    }
}
