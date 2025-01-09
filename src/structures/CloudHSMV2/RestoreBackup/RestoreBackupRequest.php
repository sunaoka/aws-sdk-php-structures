<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\RestoreBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupId
 */
class RestoreBackupRequest extends Request
{
    /**
     * @param array{BackupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
