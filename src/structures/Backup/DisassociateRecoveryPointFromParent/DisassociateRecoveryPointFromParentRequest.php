<?php

namespace Sunaoka\Aws\Structures\Backup\DisassociateRecoveryPointFromParent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $RecoveryPointArn
 */
class DisassociateRecoveryPointFromParentRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     RecoveryPointArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
