<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreAccessBackupVaults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListRestoreAccessBackupVaultsRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
