<?php

namespace Sunaoka\Aws\Structures\Backup\StartBackupJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $ResourceArn
 * @property string $IamRoleArn
 * @property string|null $IdempotencyToken
 * @property int|null $StartWindowMinutes
 * @property int|null $CompleteWindowMinutes
 * @property Shapes\Lifecycle|null $Lifecycle
 * @property array<string, string>|null $RecoveryPointTags
 * @property array<string, string>|null $BackupOptions
 * @property 'ENABLED'|'DISABLED'|null $Index
 */
class StartBackupJobRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     ResourceArn: string,
     *     IamRoleArn: string,
     *     IdempotencyToken?: string|null,
     *     StartWindowMinutes?: int|null,
     *     CompleteWindowMinutes?: int|null,
     *     Lifecycle?: Shapes\Lifecycle|null,
     *     RecoveryPointTags?: array<string, string>|null,
     *     BackupOptions?: array<string, string>|null,
     *     Index?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
