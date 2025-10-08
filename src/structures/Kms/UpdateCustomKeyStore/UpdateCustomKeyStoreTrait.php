<?php

namespace Sunaoka\Aws\Structures\Kms\UpdateCustomKeyStore;

trait UpdateCustomKeyStoreTrait
{
    /**
     * @param UpdateCustomKeyStoreRequest $args
     * @return UpdateCustomKeyStoreResponse
     */
    public function updateCustomKeyStore(UpdateCustomKeyStoreRequest $args)
    {
        $result = parent::updateCustomKeyStore($args->toArray());
        return new UpdateCustomKeyStoreResponse($result->toArray());
    }
}
