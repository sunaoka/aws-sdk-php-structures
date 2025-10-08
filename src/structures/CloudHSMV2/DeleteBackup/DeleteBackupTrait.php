<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DeleteBackup;

trait DeleteBackupTrait
{
    /**
     * @param DeleteBackupRequest $args
     * @return DeleteBackupResponse
     */
    public function deleteBackup(DeleteBackupRequest $args)
    {
        $result = parent::deleteBackup($args->toArray());
        return new DeleteBackupResponse($result->toArray());
    }
}
