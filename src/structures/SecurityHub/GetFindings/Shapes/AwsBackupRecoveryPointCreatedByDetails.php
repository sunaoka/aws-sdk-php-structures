<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackupPlanArn
 * @property string|null $BackupPlanId
 * @property string|null $BackupPlanVersion
 * @property string|null $BackupRuleId
 */
class AwsBackupRecoveryPointCreatedByDetails extends Shape
{
    /**
     * @param array{
     *     BackupPlanArn?: string|null,
     *     BackupPlanId?: string|null,
     *     BackupPlanVersion?: string|null,
     *     BackupRuleId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
