<?php

namespace Sunaoka\Aws\Structures\Backup\StartCopyJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecoveryPointArn
 * @property string $SourceBackupVaultName
 * @property string $DestinationBackupVaultArn
 * @property string $IamRoleArn
 * @property string $IdempotencyToken
 * @property Shapes\Lifecycle $Lifecycle
 */
class StartCopyJobRequest extends Request
{
    /**
     * @param array{
     *     RecoveryPointArn: string,
     *     SourceBackupVaultName: string,
     *     DestinationBackupVaultArn: string,
     *     IamRoleArn: string,
     *     IdempotencyToken?: string,
     *     Lifecycle?: Shapes\Lifecycle
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
