<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteAutonomousDatabaseBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseBackupId
 */
class DeleteAutonomousDatabaseBackupRequest extends Request
{
    /**
     * @param array{autonomousDatabaseBackupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
