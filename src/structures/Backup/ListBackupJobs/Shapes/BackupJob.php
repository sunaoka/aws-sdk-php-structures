<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $BackupJobId
 * @property string $BackupVaultName
 * @property string $BackupVaultArn
 * @property string $RecoveryPointArn
 * @property string $ResourceArn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $CompletionDate
 * @property 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL' $State
 * @property string $StatusMessage
 * @property string $PercentDone
 * @property int $BackupSizeInBytes
 * @property string $IamRoleArn
 * @property RecoveryPointCreator $CreatedBy
 * @property \Aws\Api\DateTimeResult $ExpectedCompletionDate
 * @property \Aws\Api\DateTimeResult $StartBy
 * @property string $ResourceType
 * @property int $BytesTransferred
 * @property array<string, string> $BackupOptions
 * @property string $BackupType
 * @property string $ParentJobId
 * @property bool $IsParent
 * @property string $ResourceName
 * @property \Aws\Api\DateTimeResult $InitiationDate
 * @property string $MessageCategory
 */
class BackupJob extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     BackupJobId?: string,
     *     BackupVaultName?: string,
     *     BackupVaultArn?: string,
     *     RecoveryPointArn?: string,
     *     ResourceArn?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     CompletionDate?: \Aws\Api\DateTimeResult,
     *     State?: 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL',
     *     StatusMessage?: string,
     *     PercentDone?: string,
     *     BackupSizeInBytes?: int,
     *     IamRoleArn?: string,
     *     CreatedBy?: RecoveryPointCreator,
     *     ExpectedCompletionDate?: \Aws\Api\DateTimeResult,
     *     StartBy?: \Aws\Api\DateTimeResult,
     *     ResourceType?: string,
     *     BytesTransferred?: int,
     *     BackupOptions?: array<string, string>,
     *     BackupType?: string,
     *     ParentJobId?: string,
     *     IsParent?: bool,
     *     ResourceName?: string,
     *     InitiationDate?: \Aws\Api\DateTimeResult,
     *     MessageCategory?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
