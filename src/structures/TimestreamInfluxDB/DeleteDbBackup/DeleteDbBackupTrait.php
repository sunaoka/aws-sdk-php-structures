<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\DeleteDbBackup;

trait DeleteDbBackupTrait
{
    /**
     * @param DeleteDbBackupRequest $args
     * @return DeleteDbBackupResponse
     */
    public function deleteDbBackup(DeleteDbBackupRequest $args)
    {
        $result = parent::deleteDbBackup($args->toArray());
        return new DeleteDbBackupResponse($result->toArray());
    }
}
