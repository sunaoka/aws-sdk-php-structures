<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbBackup;

trait CreateDbBackupTrait
{
    /**
     * @param CreateDbBackupRequest $args
     * @return CreateDbBackupResponse
     */
    public function createDbBackup(CreateDbBackupRequest $args)
    {
        $result = parent::createDbBackup($args->toArray());
        return new CreateDbBackupResponse($result->toArray());
    }
}
