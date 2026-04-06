<?php

namespace Sunaoka\Aws\Structures\Backup\CreateLogicallyAirGappedBackupVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property array<string, string>|null $BackupVaultTags
 * @property string|null $CreatorRequestId
 * @property int $MinRetentionDays
 * @property int $MaxRetentionDays
 * @property string|null $EncryptionKeyArn
 */
class CreateLogicallyAirGappedBackupVaultRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     BackupVaultTags?: array<string, string>|null,
     *     CreatorRequestId?: string|null,
     *     MinRetentionDays: int,
     *     MaxRetentionDays: int,
     *     EncryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
