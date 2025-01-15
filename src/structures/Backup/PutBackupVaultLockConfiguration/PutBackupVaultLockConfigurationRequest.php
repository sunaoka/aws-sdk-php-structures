<?php

namespace Sunaoka\Aws\Structures\Backup\PutBackupVaultLockConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property int|null $MinRetentionDays
 * @property int|null $MaxRetentionDays
 * @property int|null $ChangeableForDays
 */
class PutBackupVaultLockConfigurationRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     MinRetentionDays?: int|null,
     *     MaxRetentionDays?: int|null,
     *     ChangeableForDays?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
