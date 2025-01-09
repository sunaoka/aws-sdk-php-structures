<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobsByProtectedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $RestoreJobId
 * @property string $RecoveryPointArn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $CompletionDate
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'ABORTED'|'FAILED' $Status
 * @property string $StatusMessage
 * @property string $PercentDone
 * @property int $BackupSizeInBytes
 * @property string $IamRoleArn
 * @property int $ExpectedCompletionTimeMinutes
 * @property string $CreatedResourceArn
 * @property string $ResourceType
 * @property \Aws\Api\DateTimeResult $RecoveryPointCreationDate
 * @property RestoreJobCreator $CreatedBy
 * @property 'FAILED'|'SUCCESSFUL'|'TIMED_OUT'|'VALIDATING' $ValidationStatus
 * @property string $ValidationStatusMessage
 * @property 'DELETING'|'FAILED'|'SUCCESSFUL' $DeletionStatus
 * @property string $DeletionStatusMessage
 */
class RestoreJobsListMember extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     RestoreJobId?: string,
     *     RecoveryPointArn?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     CompletionDate?: \Aws\Api\DateTimeResult,
     *     Status?: 'PENDING'|'RUNNING'|'COMPLETED'|'ABORTED'|'FAILED',
     *     StatusMessage?: string,
     *     PercentDone?: string,
     *     BackupSizeInBytes?: int,
     *     IamRoleArn?: string,
     *     ExpectedCompletionTimeMinutes?: int,
     *     CreatedResourceArn?: string,
     *     ResourceType?: string,
     *     RecoveryPointCreationDate?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: RestoreJobCreator,
     *     ValidationStatus?: 'FAILED'|'SUCCESSFUL'|'TIMED_OUT'|'VALIDATING',
     *     ValidationStatusMessage?: string,
     *     DeletionStatus?: 'DELETING'|'FAILED'|'SUCCESSFUL',
     *     DeletionStatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
