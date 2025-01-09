<?php

namespace Sunaoka\Aws\Structures\Backup\StartBackupJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $ResourceArn
 * @property string $IamRoleArn
 * @property string $IdempotencyToken
 * @property int $StartWindowMinutes
 * @property int $CompleteWindowMinutes
 * @property Shapes\Lifecycle $Lifecycle
 * @property array<string, string> $RecoveryPointTags
 * @property array<string, string> $BackupOptions
 * @property 'ENABLED'|'DISABLED' $Index
 */
class StartBackupJobRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     ResourceArn: string,
     *     IamRoleArn: string,
     *     IdempotencyToken?: string,
     *     StartWindowMinutes?: int,
     *     CompleteWindowMinutes?: int,
     *     Lifecycle?: Shapes\Lifecycle,
     *     RecoveryPointTags?: array<string, string>,
     *     BackupOptions?: array<string, string>,
     *     Index?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
