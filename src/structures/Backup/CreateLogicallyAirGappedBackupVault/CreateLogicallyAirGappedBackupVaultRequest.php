<?php

namespace Sunaoka\Aws\Structures\Backup\CreateLogicallyAirGappedBackupVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property array<string, string> $BackupVaultTags
 * @property string $CreatorRequestId
 * @property int $MinRetentionDays
 * @property int $MaxRetentionDays
 */
class CreateLogicallyAirGappedBackupVaultRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     BackupVaultTags?: array<string, string>,
     *     CreatorRequestId?: string,
     *     MinRetentionDays: int,
     *     MaxRetentionDays: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
