<?php

namespace Sunaoka\Aws\Structures\Backup\PutBackupVaultLockConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property int $MinRetentionDays
 * @property int $MaxRetentionDays
 * @property int $ChangeableForDays
 */
class PutBackupVaultLockConfigurationRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     MinRetentionDays?: int,
     *     MaxRetentionDays?: int,
     *     ChangeableForDays?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
