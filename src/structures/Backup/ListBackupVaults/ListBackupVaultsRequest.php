<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupVaults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT'|'RESTORE_ACCESS_BACKUP_VAULT'|null $ByVaultType
 * @property bool|null $ByShared
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListBackupVaultsRequest extends Request
{
    /**
     * @param array{
     *     ByVaultType?: 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT'|'RESTORE_ACCESS_BACKUP_VAULT'|null,
     *     ByShared?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
