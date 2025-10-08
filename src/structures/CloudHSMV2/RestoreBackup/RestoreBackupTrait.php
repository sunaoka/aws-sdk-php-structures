<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\RestoreBackup;

trait RestoreBackupTrait
{
    /**
     * @param RestoreBackupRequest $args
     * @return RestoreBackupResponse
     */
    public function restoreBackup(RestoreBackupRequest $args)
    {
        $result = parent::restoreBackup($args->toArray());
        return new RestoreBackupResponse($result->toArray());
    }
}
