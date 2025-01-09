<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeBackupJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupJobId
 */
class DescribeBackupJobRequest extends Request
{
    /**
     * @param array{BackupJobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
