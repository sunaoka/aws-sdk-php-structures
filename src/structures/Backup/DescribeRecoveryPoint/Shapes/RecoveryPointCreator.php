<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRecoveryPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackupPlanId
 * @property string|null $BackupPlanArn
 * @property string|null $BackupPlanName
 * @property string|null $BackupPlanVersion
 * @property string|null $BackupRuleId
 * @property string|null $BackupRuleName
 * @property string|null $BackupRuleCron
 * @property string|null $BackupRuleTimezone
 */
class RecoveryPointCreator extends Shape
{
    /**
     * @param array{
     *     BackupPlanId?: string|null,
     *     BackupPlanArn?: string|null,
     *     BackupPlanName?: string|null,
     *     BackupPlanVersion?: string|null,
     *     BackupRuleId?: string|null,
     *     BackupRuleName?: string|null,
     *     BackupRuleCron?: string|null,
     *     BackupRuleTimezone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
