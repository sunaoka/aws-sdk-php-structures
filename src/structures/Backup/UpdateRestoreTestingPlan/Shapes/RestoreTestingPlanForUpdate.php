<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRestoreTestingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RestoreTestingRecoveryPointSelection|null $RecoveryPointSelection
 * @property string|null $ScheduleExpression
 * @property string|null $ScheduleExpressionTimezone
 * @property int|null $StartWindowHours
 */
class RestoreTestingPlanForUpdate extends Shape
{
    /**
     * @param array{
     *     RecoveryPointSelection?: RestoreTestingRecoveryPointSelection|null,
     *     ScheduleExpression?: string|null,
     *     ScheduleExpressionTimezone?: string|null,
     *     StartWindowHours?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
