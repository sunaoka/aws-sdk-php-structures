<?php

namespace Sunaoka\Aws\Structures\Backup\StopBackupJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupJobId
 */
class StopBackupJobRequest extends Request
{
    /**
     * @param array{BackupJobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
