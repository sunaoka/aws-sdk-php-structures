<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string $BackupName
 */
class CreateBackupRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     BackupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
