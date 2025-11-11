<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRestoreJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AccountId
 * @property string|null $RestoreJobId
 * @property string|null $RecoveryPointArn
 * @property string|null $SourceResourceArn
 * @property string|null $BackupVaultArn
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
 * @property \Aws\Api\DateTimeResult|null $RecoveryPointCreationDate
 * @property Shapes\RestoreJobCreator|null $CreatedBy
 * @property 'FAILED'|'SUCCESSFUL'|'TIMED_OUT'|'VALIDATING'|null $ValidationStatus
 * @property string|null $ValidationStatusMessage
 * @property 'DELETING'|'FAILED'|'SUCCESSFUL'|null $DeletionStatus
 * @property string|null $DeletionStatusMessage
 * @property bool|null $IsParent
 * @property string|null $ParentJobId
 */
class DescribeRestoreJobResponse extends Response
{
}
