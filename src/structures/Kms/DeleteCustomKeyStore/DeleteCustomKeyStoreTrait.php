<?php

namespace Sunaoka\Aws\Structures\Kms\DeleteCustomKeyStore;

trait DeleteCustomKeyStoreTrait
{
    /**
     * @param DeleteCustomKeyStoreRequest $args
     * @return DeleteCustomKeyStoreResponse
     */
    public function deleteCustomKeyStore(DeleteCustomKeyStoreRequest $args)
    {
        $result = parent::deleteCustomKeyStore($args->toArray());
        return new DeleteCustomKeyStoreResponse($result->toArray());
    }
}
