<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolumeFromBackup;

trait CreateVolumeFromBackupTrait
{
    /**
     * @param CreateVolumeFromBackupRequest $args
     * @return CreateVolumeFromBackupResponse
     */
    public function createVolumeFromBackup(CreateVolumeFromBackupRequest $args)
    {
        $result = parent::createVolumeFromBackup($args->toArray());
        return new CreateVolumeFromBackupResponse($result->toArray());
    }
}
