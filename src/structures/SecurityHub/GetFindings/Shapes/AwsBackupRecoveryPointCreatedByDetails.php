<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupPlanArn
 * @property string $BackupPlanId
 * @property string $BackupPlanVersion
 * @property string $BackupRuleId
 */
class AwsBackupRecoveryPointCreatedByDetails extends Shape
{
    /**
     * @param array{
     *     BackupPlanArn?: string,
     *     BackupPlanId?: string,
     *     BackupPlanVersion?: string,
     *     BackupRuleId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
