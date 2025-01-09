<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRecoveryPointIndexSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $RecoveryPointArn
 * @property string $IamRoleArn
 * @property 'ENABLED'|'DISABLED' $Index
 */
class UpdateRecoveryPointIndexSettingsRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     RecoveryPointArn: string,
     *     IamRoleArn?: string,
     *     Index: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
