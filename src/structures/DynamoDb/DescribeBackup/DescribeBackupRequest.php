<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupArn
 */
class DescribeBackupRequest extends Request
{
    /**
     * @param array{BackupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
