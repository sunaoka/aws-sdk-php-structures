<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRestoreTestingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RestoreTestingRecoveryPointSelection $RecoveryPointSelection
 * @property string $ScheduleExpression
 * @property string $ScheduleExpressionTimezone
 * @property int $StartWindowHours
 */
class RestoreTestingPlanForUpdate extends Shape
{
    /**
     * @param array{
     *     RecoveryPointSelection?: RestoreTestingRecoveryPointSelection,
     *     ScheduleExpression?: string,
     *     ScheduleExpressionTimezone?: string,
     *     StartWindowHours?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
