<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecoveryPointArn
 * @property string|null $BackupVaultName
 * @property ScanConfigurationContinuousScanDetails|null $ContinuousScanDetails
 */
class RecoveryPointDetails extends Shape
{
    /**
     * @param array{
     *     RecoveryPointArn?: string|null,
     *     BackupVaultName?: string|null,
     *     ContinuousScanDetails?: ScanConfigurationContinuousScanDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
