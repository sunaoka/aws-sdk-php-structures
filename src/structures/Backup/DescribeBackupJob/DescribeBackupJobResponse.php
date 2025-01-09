<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeBackupJob;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\RecoveryPointCreator $CreatedBy
 * @property string $ResourceType
 * @property int $BytesTransferred
 * @property \Aws\Api\DateTimeResult $ExpectedCompletionDate
 * @property \Aws\Api\DateTimeResult $StartBy
 * @property array<string, string> $BackupOptions
 * @property string $BackupType
 * @property string $ParentJobId
 * @property bool $IsParent
 * @property int $NumberOfChildJobs
 * @property array<'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL', int> $ChildJobsInState
 * @property string $ResourceName
 * @property \Aws\Api\DateTimeResult $InitiationDate
 * @property string $MessageCategory
 */
class DescribeBackupJobResponse extends Response
{
}
