<?php

namespace Sunaoka\Aws\Structures\Backup\GetRecoveryPointIndexDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $RecoveryPointArn
 */
class GetRecoveryPointIndexDetailsRequest extends Request
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
