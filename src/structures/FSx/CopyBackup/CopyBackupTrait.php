<?php

namespace Sunaoka\Aws\Structures\FSx\CopyBackup;

trait CopyBackupTrait
{
    /**
     * @param CopyBackupRequest $args
     * @return CopyBackupResponse
     */
    public function copyBackup(CopyBackupRequest $args)
    {
        $result = parent::copyBackup($args->toArray());
        return new CopyBackupResponse($result->toArray());
    }
}
