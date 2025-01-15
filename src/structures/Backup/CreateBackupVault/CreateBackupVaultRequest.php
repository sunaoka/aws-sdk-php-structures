<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property array<string, string>|null $BackupVaultTags
 * @property string|null $EncryptionKeyArn
 * @property string|null $CreatorRequestId
 */
class CreateBackupVaultRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     BackupVaultTags?: array<string, string>|null,
     *     EncryptionKeyArn?: string|null,
     *     CreatorRequestId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
