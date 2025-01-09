<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRecoveryPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $RecoveryPointArn
 * @property string $BackupVaultAccountId
 */
class DescribeRecoveryPointRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     RecoveryPointArn: string,
     *     BackupVaultAccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
