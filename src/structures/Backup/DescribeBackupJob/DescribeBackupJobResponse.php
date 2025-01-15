<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeBackupJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AccountId
 * @property string|null $BackupJobId
 * @property string|null $BackupVaultName
 * @property string|null $BackupVaultArn
 * @property string|null $RecoveryPointArn
 * @property string|null $ResourceArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $CompletionDate
 * @property 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL'|null $State
 * @property string|null $StatusMessage
 * @property string|null $PercentDone
 * @property int|null $BackupSizeInBytes
 * @property string|null $IamRoleArn
 * @property Shapes\RecoveryPointCreator|null $CreatedBy
 * @property string|null $ResourceType
 * @property int|null $BytesTransferred
 * @property \Aws\Api\DateTimeResult|null $ExpectedCompletionDate
 * @property \Aws\Api\DateTimeResult|null $StartBy
 * @property array<string, string>|null $BackupOptions
 * @property string|null $BackupType
 * @property string|null $ParentJobId
 * @property bool|null $IsParent
 * @property int|null $NumberOfChildJobs
 * @property array<'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL', int>|null $ChildJobsInState
 * @property string|null $ResourceName
 * @property \Aws\Api\DateTimeResult|null $InitiationDate
 * @property string|null $MessageCategory
 */
class DescribeBackupJobResponse extends Response
{
}
