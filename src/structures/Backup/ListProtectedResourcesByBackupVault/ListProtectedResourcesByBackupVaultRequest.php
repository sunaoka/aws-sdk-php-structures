<?php

namespace Sunaoka\Aws\Structures\Backup\ListProtectedResourcesByBackupVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $BackupVaultAccountId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListProtectedResourcesByBackupVaultRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     BackupVaultAccountId?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
