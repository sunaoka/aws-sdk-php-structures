<?php

namespace Sunaoka\Aws\Structures\Backup\ListProtectedResourcesByBackupVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string|null $BackupVaultAccountId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListProtectedResourcesByBackupVaultRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     BackupVaultAccountId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
