<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbBackup;

trait GetDbBackupTrait
{
    /**
     * @param GetDbBackupRequest $args
     * @return GetDbBackupResponse
     */
    public function getDbBackup(GetDbBackupRequest $args)
    {
        $result = parent::getDbBackup($args->toArray());
        return new GetDbBackupResponse($result->toArray());
    }
}
