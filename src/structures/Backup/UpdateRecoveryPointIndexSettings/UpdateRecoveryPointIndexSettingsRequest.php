<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRecoveryPointIndexSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $RecoveryPointArn
 * @property string|null $IamRoleArn
 * @property 'ENABLED'|'DISABLED' $Index
 */
class UpdateRecoveryPointIndexSettingsRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     RecoveryPointArn: string,
     *     IamRoleArn?: string|null,
     *     Index: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
