<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingInferredMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultAccountId
 * @property string $BackupVaultName
 * @property string $RecoveryPointArn
 */
class GetRestoreTestingInferredMetadataRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultAccountId?: string,
     *     BackupVaultName: string,
     *     RecoveryPointArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
