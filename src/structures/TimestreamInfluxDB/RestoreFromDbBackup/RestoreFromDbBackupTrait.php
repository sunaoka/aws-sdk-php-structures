<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\RestoreFromDbBackup;

trait RestoreFromDbBackupTrait
{
    /**
     * @param RestoreFromDbBackupRequest $args
     * @return RestoreFromDbBackupResponse
     */
    public function restoreFromDbBackup(RestoreFromDbBackupRequest $args)
    {
        $result = parent::restoreFromDbBackup($args->toArray());
        return new RestoreFromDbBackupResponse($result->toArray());
    }
}
