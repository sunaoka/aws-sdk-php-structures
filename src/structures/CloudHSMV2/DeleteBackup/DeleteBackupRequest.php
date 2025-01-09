<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DeleteBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupId
 */
class DeleteBackupRequest extends Request
{
    /**
     * @param array{BackupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
