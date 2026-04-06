<?php

namespace Sunaoka\Aws\Structures\Backup\ListScanJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $BackupVaultArn
 * @property string $BackupVaultName
 * @property \Aws\Api\DateTimeResult|null $CompletionDate
 * @property ScanJobCreator $CreatedBy
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
 * @property ScanResultInfo|null $ScanResult
 * @property string $ScannerRoleArn
 * @property 'CANCELED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'|'CREATED'|'FAILED'|'RUNNING'|null $State
 * @property string|null $StatusMessage
 */
class ScanJob extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     BackupVaultArn: string,
     *     BackupVaultName: string,
     *     CompletionDate?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy: ScanJobCreator,
     *     CreationDate: \Aws\Api\DateTimeResult,
     *     IamRoleArn: string,
     *     MalwareScanner: 'GUARDDUTY',
     *     RecoveryPointArn: string,
     *     ResourceArn: string,
     *     ResourceName: string,
     *     ResourceType: 'EBS'|'EC2'|'S3',
     *     ScanBaseRecoveryPointArn?: string|null,
     *     ScanId?: string|null,
     *     ScanJobId: string,
     *     ScanMode: 'FULL_SCAN'|'INCREMENTAL_SCAN',
     *     ScanResult?: ScanResultInfo|null,
     *     ScannerRoleArn: string,
     *     State?: 'CANCELED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'|'CREATED'|'FAILED'|'RUNNING'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
