<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableFromBackup;

trait RestoreTableFromBackupTrait
{
    /**
     * @param RestoreTableFromBackupRequest $args
     * @return RestoreTableFromBackupResponse
     */
    public function restoreTableFromBackup(RestoreTableFromBackupRequest $args)
    {
        $result = parent::restoreTableFromBackup($args->toArray());
        return new RestoreTableFromBackupResponse($result->toArray());
    }
}
