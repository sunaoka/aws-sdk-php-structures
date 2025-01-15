<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeCopyJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackupPlanId
 * @property string|null $BackupPlanArn
 * @property string|null $BackupPlanVersion
 * @property string|null $BackupRuleId
 */
class RecoveryPointCreator extends Shape
{
    /**
     * @param array{
     *     BackupPlanId?: string|null,
     *     BackupPlanArn?: string|null,
     *     BackupPlanVersion?: string|null,
     *     BackupRuleId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
