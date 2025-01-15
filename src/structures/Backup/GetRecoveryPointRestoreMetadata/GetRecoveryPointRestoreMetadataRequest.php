<?php

namespace Sunaoka\Aws\Structures\Backup\GetRecoveryPointRestoreMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $RecoveryPointArn
 * @property string|null $BackupVaultAccountId
 */
class GetRecoveryPointRestoreMetadataRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     RecoveryPointArn: string,
     *     BackupVaultAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
