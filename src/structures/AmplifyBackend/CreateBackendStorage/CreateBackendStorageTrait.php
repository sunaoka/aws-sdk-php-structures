<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendStorage;

trait CreateBackendStorageTrait
{
    /**
     * @param CreateBackendStorageRequest $args
     * @return CreateBackendStorageResponse
     */
    public function createBackendStorage(CreateBackendStorageRequest $args)
    {
        $result = parent::createBackendStorage($args->toArray());
        return new CreateBackendStorageResponse($result->toArray());
    }
}
