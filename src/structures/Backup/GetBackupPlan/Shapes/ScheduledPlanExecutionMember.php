<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $ExecutionTime
 * @property string|null $RuleId
 * @property 'CONTINUOUS'|'SNAPSHOTS'|'CONTINUOUS_AND_SNAPSHOTS'|null $RuleExecutionType
 */
class ScheduledPlanExecutionMember extends Shape
{
    /**
     * @param array{
     *     ExecutionTime?: \Aws\Api\DateTimeResult|null,
     *     RuleId?: string|null,
     *     RuleExecutionType?: 'CONTINUOUS'|'SNAPSHOTS'|'CONTINUOUS_AND_SNAPSHOTS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
