<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabaseBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseBackupId
 */
class GetAutonomousDatabaseBackupRequest extends Request
{
    /**
     * @param array{autonomousDatabaseBackupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
