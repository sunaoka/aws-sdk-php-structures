<?php

namespace Sunaoka\Aws\Structures\Backup\StartCopyJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecoveryPointArn
 * @property string $SourceBackupVaultName
 * @property string $DestinationBackupVaultArn
 * @property string $IamRoleArn
 * @property string|null $IdempotencyToken
 * @property Shapes\Lifecycle|null $Lifecycle
 */
class StartCopyJobRequest extends Request
{
    /**
     * @param array{
     *     RecoveryPointArn: string,
     *     SourceBackupVaultName: string,
     *     DestinationBackupVaultArn: string,
     *     IamRoleArn: string,
     *     IdempotencyToken?: string|null,
     *     Lifecycle?: Shapes\Lifecycle|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
