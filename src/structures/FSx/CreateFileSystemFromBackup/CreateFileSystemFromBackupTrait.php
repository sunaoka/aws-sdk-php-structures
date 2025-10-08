<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystemFromBackup;

trait CreateFileSystemFromBackupTrait
{
    /**
     * @param CreateFileSystemFromBackupRequest $args
     * @return CreateFileSystemFromBackupResponse
     */
    public function createFileSystemFromBackup(CreateFileSystemFromBackupRequest $args)
    {
        $result = parent::createFileSystemFromBackup($args->toArray());
        return new CreateFileSystemFromBackupResponse($result->toArray());
    }
}
