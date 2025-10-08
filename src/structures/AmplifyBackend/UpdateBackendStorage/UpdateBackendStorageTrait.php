<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendStorage;

trait UpdateBackendStorageTrait
{
    /**
     * @param UpdateBackendStorageRequest $args
     * @return UpdateBackendStorageResponse
     */
    public function updateBackendStorage(UpdateBackendStorageRequest $args)
    {
        $result = parent::updateBackendStorage($args->toArray());
        return new UpdateBackendStorageResponse($result->toArray());
    }
}
