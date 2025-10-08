<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreAccessBackupVaults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RestoreAccessBackupVaultArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $ApprovalDate
 * @property 'CREATING'|'AVAILABLE'|'FAILED'|null $VaultState
 * @property LatestRevokeRequest|null $LatestRevokeRequest
 */
class RestoreAccessBackupVaultListMember extends Shape
{
    /**
     * @param array{
     *     RestoreAccessBackupVaultArn?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     ApprovalDate?: \Aws\Api\DateTimeResult|null,
     *     VaultState?: 'CREATING'|'AVAILABLE'|'FAILED'|null,
     *     LatestRevokeRequest?: LatestRevokeRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
