<?php

namespace Sunaoka\Aws\Structures\Backup\StartScanJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $IamRoleArn
 * @property string|null $IdempotencyToken
 * @property 'GUARDDUTY' $MalwareScanner
 * @property string $RecoveryPointArn
 * @property string|null $ScanBaseRecoveryPointArn
 * @property 'FULL_SCAN'|'INCREMENTAL_SCAN' $ScanMode
 * @property string $ScannerRoleArn
 */
class StartScanJobRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     IamRoleArn: string,
     *     IdempotencyToken?: string|null,
     *     MalwareScanner: 'GUARDDUTY',
     *     RecoveryPointArn: string,
     *     ScanBaseRecoveryPointArn?: string|null,
     *     ScanMode: 'FULL_SCAN'|'INCREMENTAL_SCAN',
     *     ScannerRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
