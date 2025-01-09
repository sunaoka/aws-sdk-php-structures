<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupVaults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT' $ByVaultType
 * @property bool $ByShared
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListBackupVaultsRequest extends Request
{
    /**
     * @param array{
     *     ByVaultType?: 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT',
     *     ByShared?: bool,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
