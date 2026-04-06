<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingInferredMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BackupVaultAccountId
 * @property string $BackupVaultName
 * @property string $RecoveryPointArn
 */
class GetRestoreTestingInferredMetadataRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultAccountId?: string|null,
     *     BackupVaultName: string,
     *     RecoveryPointArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
