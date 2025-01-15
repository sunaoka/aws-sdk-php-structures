<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRecoveryPointLifecycle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $RecoveryPointArn
 * @property Shapes\Lifecycle|null $Lifecycle
 */
class UpdateRecoveryPointLifecycleRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     RecoveryPointArn: string,
     *     Lifecycle?: Shapes\Lifecycle|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
