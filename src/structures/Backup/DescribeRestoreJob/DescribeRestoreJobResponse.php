<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRestoreJob;

use Sunaoka\Aws\Structures\Response;

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
class DescribeRestoreJobResponse extends Response
{
}
