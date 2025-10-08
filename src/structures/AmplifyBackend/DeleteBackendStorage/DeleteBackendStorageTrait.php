<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\DeleteBackendStorage;

trait DeleteBackendStorageTrait
{
    /**
     * @param DeleteBackendStorageRequest $args
     * @return DeleteBackendStorageResponse
     */
    public function deleteBackendStorage(DeleteBackendStorageRequest $args)
    {
        $result = parent::deleteBackendStorage($args->toArray());
        return new DeleteBackendStorageResponse($result->toArray());
    }
}
