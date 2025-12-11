<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeScanJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AccountId
 * @property string $BackupVaultArn
 * @property string $BackupVaultName
 * @property \Aws\Api\DateTimeResult|null $CompletionDate
 * @property Shapes\ScanJobCreator $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $IamRoleArn
 * @property 'GUARDDUTY' $MalwareScanner
 * @property string $RecoveryPointArn
 * @property string $ResourceArn
 * @property string $ResourceName
 * @property 'EBS'|'EC2'|'S3' $ResourceType
 * @property string|null $ScanBaseRecoveryPointArn
 * @property string|null $ScanId
 * @property string $ScanJobId
 * @property 'FULL_SCAN'|'INCREMENTAL_SCAN' $ScanMode
 * @property Shapes\ScanResultInfo|null $ScanResult
 * @property string $ScannerRoleArn
 * @property 'CANCELED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'|'CREATED'|'FAILED'|'RUNNING' $State
 * @property string|null $StatusMessage
 */
class DescribeScanJobResponse extends Response
{
}
