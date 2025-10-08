<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ImportBackendStorage;

trait ImportBackendStorageTrait
{
    /**
     * @param ImportBackendStorageRequest $args
     * @return ImportBackendStorageResponse
     */
    public function importBackendStorage(ImportBackendStorageRequest $args)
    {
        $result = parent::importBackendStorage($args->toArray());
        return new ImportBackendStorageResponse($result->toArray());
    }
}
