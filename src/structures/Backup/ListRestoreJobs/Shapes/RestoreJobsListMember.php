<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $RestoreJobId
 * @property string|null $RecoveryPointArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $CompletionDate
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'ABORTED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $PercentDone
 * @property int|null $BackupSizeInBytes
 * @property string|null $IamRoleArn
 * @property int|null $ExpectedCompletionTimeMinutes
 * @property string|null $CreatedResourceArn
 * @property string|null $ResourceType
 */
class RestoreJobsListMember extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     RestoreJobId?: string|null,
     *     RecoveryPointArn?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     CompletionDate?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'PENDING'|'RUNNING'|'COMPLETED'|'ABORTED'|'FAILED'|null,
     *     StatusMessage?: string|null,
     *     PercentDone?: string|null,
     *     BackupSizeInBytes?: int|null,
     *     IamRoleArn?: string|null,
     *     ExpectedCompletionTimeMinutes?: int|null,
     *     CreatedResourceArn?: string|null,
     *     ResourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
