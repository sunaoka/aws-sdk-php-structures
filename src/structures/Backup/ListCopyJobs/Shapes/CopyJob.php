<?php

namespace Sunaoka\Aws\Structures\Backup\ListCopyJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $CopyJobId
 * @property string|null $SourceBackupVaultArn
 * @property string|null $SourceRecoveryPointArn
 * @property string|null $DestinationBackupVaultArn
 * @property string|null $DestinationVaultType
 * @property string|null $DestinationVaultLockState
 * @property string|null $DestinationRecoveryPointArn
 * @property string|null $DestinationEncryptionKeyArn
 * @property Lifecycle|null $DestinationRecoveryPointLifecycle
 * @property string|null $ResourceArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $CompletionDate
 * @property 'CREATED'|'RUNNING'|'COMPLETED'|'FAILED'|'PARTIAL'|null $State
 * @property string|null $StatusMessage
 * @property int|null $BackupSizeInBytes
 * @property string|null $IamRoleArn
 * @property RecoveryPointCreator|null $CreatedBy
 * @property string|null $ResourceType
 * @property string|null $ParentJobId
 * @property bool|null $IsParent
 * @property string|null $CompositeMemberIdentifier
 * @property int|null $NumberOfChildJobs
 * @property array<'CREATED'|'RUNNING'|'COMPLETED'|'FAILED'|'PARTIAL', int>|null $ChildJobsInState
 * @property string|null $ResourceName
 * @property string|null $MessageCategory
 */
class CopyJob extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     CopyJobId?: string|null,
     *     SourceBackupVaultArn?: string|null,
     *     SourceRecoveryPointArn?: string|null,
     *     DestinationBackupVaultArn?: string|null,
     *     DestinationVaultType?: string|null,
     *     DestinationVaultLockState?: string|null,
     *     DestinationRecoveryPointArn?: string|null,
     *     DestinationEncryptionKeyArn?: string|null,
     *     DestinationRecoveryPointLifecycle?: Lifecycle|null,
     *     ResourceArn?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     CompletionDate?: \Aws\Api\DateTimeResult|null,
     *     State?: 'CREATED'|'RUNNING'|'COMPLETED'|'FAILED'|'PARTIAL'|null,
     *     StatusMessage?: string|null,
     *     BackupSizeInBytes?: int|null,
     *     IamRoleArn?: string|null,
     *     CreatedBy?: RecoveryPointCreator|null,
     *     ResourceType?: string|null,
     *     ParentJobId?: string|null,
     *     IsParent?: bool|null,
     *     CompositeMemberIdentifier?: string|null,
     *     NumberOfChildJobs?: int|null,
     *     ChildJobsInState?: array<'CREATED'|'RUNNING'|'COMPLETED'|'FAILED'|'PARTIAL', int>|null,
     *     ResourceName?: string|null,
     *     MessageCategory?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
