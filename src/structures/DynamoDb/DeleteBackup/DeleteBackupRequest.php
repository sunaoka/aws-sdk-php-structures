<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupArn
 */
class DeleteBackupRequest extends Request
{
    /**
     * @param array{BackupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
