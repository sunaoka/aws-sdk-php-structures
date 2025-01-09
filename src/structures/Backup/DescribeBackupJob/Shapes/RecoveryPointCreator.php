<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeBackupJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupPlanId
 * @property string $BackupPlanArn
 * @property string $BackupPlanVersion
 * @property string $BackupRuleId
 */
class RecoveryPointCreator extends Shape
{
    /**
     * @param array{
     *     BackupPlanId?: string,
     *     BackupPlanArn?: string,
     *     BackupPlanVersion?: string,
     *     BackupRuleId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
