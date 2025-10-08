<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendStorage;

trait GetBackendStorageTrait
{
    /**
     * @param GetBackendStorageRequest $args
     * @return GetBackendStorageResponse
     */
    public function getBackendStorage(GetBackendStorageRequest $args)
    {
        $result = parent::getBackendStorage($args->toArray());
        return new GetBackendStorageResponse($result->toArray());
    }
}
