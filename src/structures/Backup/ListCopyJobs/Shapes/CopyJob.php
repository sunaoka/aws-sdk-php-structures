<?php

namespace Sunaoka\Aws\Structures\Backup\ListCopyJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $CopyJobId
 * @property string $SourceBackupVaultArn
 * @property string $SourceRecoveryPointArn
 * @property string $DestinationBackupVaultArn
 * @property string $DestinationRecoveryPointArn
 * @property string $ResourceArn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $CompletionDate
 * @property 'CREATED'|'RUNNING'|'COMPLETED'|'FAILED'|'PARTIAL' $State
 * @property string $StatusMessage
 * @property int $BackupSizeInBytes
 * @property string $IamRoleArn
 * @property RecoveryPointCreator $CreatedBy
 * @property string $ResourceType
 * @property string $ParentJobId
 * @property bool $IsParent
 * @property string $CompositeMemberIdentifier
 * @property int $NumberOfChildJobs
 * @property array<'CREATED'|'RUNNING'|'COMPLETED'|'FAILED'|'PARTIAL', int> $ChildJobsInState
 * @property string $ResourceName
 * @property string $MessageCategory
 */
class CopyJob extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     CopyJobId?: string,
     *     SourceBackupVaultArn?: string,
     *     SourceRecoveryPointArn?: string,
     *     DestinationBackupVaultArn?: string,
     *     DestinationRecoveryPointArn?: string,
     *     ResourceArn?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     CompletionDate?: \Aws\Api\DateTimeResult,
     *     State?: 'CREATED'|'RUNNING'|'COMPLETED'|'FAILED'|'PARTIAL',
     *     StatusMessage?: string,
     *     BackupSizeInBytes?: int,
     *     IamRoleArn?: string,
     *     CreatedBy?: RecoveryPointCreator,
     *     ResourceType?: string,
     *     ParentJobId?: string,
     *     IsParent?: bool,
     *     CompositeMemberIdentifier?: string,
     *     NumberOfChildJobs?: int,
     *     ChildJobsInState?: array<'CREATED'|'RUNNING'|'COMPLETED'|'FAILED'|'PARTIAL', int>,
     *     ResourceName?: string,
     *     MessageCategory?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
