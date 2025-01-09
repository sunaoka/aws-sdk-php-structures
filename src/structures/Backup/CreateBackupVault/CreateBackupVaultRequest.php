<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property array<string, string> $BackupVaultTags
 * @property string $EncryptionKeyArn
 * @property string $CreatorRequestId
 */
class CreateBackupVaultRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     BackupVaultTags?: array<string, string>,
     *     EncryptionKeyArn?: string,
     *     CreatorRequestId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
