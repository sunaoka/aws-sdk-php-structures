<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRestoreJob;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\RestoreJobCreator $CreatedBy
 * @property 'FAILED'|'SUCCESSFUL'|'TIMED_OUT'|'VALIDATING' $ValidationStatus
 * @property string $ValidationStatusMessage
 * @property 'DELETING'|'FAILED'|'SUCCESSFUL' $DeletionStatus
 * @property string $DeletionStatusMessage
 */
class DescribeRestoreJobResponse extends Response
{
}
