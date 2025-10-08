<?php

namespace Sunaoka\Aws\Structures\FSx\CreateBackup;

trait CreateBackupTrait
{
    /**
     * @param CreateBackupRequest $args
     * @return CreateBackupResponse
     */
    public function createBackup(CreateBackupRequest $args)
    {
        $result = parent::createBackup($args->toArray());
        return new CreateBackupResponse($result->toArray());
    }
}
