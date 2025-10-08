<?php

namespace Sunaoka\Aws\Structures\Backup\CreateRestoreAccessBackupVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceBackupVaultArn
 * @property string|null $BackupVaultName
 * @property array<string, string>|null $BackupVaultTags
 * @property string|null $CreatorRequestId
 * @property string|null $RequesterComment
 */
class CreateRestoreAccessBackupVaultRequest extends Request
{
    /**
     * @param array{
     *     SourceBackupVaultArn: string,
     *     BackupVaultName?: string|null,
     *     BackupVaultTags?: array<string, string>|null,
     *     CreatorRequestId?: string|null,
     *     RequesterComment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
