<?php

namespace Sunaoka\Aws\Structures\Backup\CreateRestoreTestingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RestoreTestingRecoveryPointSelection $RecoveryPointSelection
 * @property string $RestoreTestingPlanName
 * @property string $ScheduleExpression
 * @property string|null $ScheduleExpressionTimezone
 * @property int|null $StartWindowHours
 */
class RestoreTestingPlanForCreate extends Shape
{
    /**
     * @param array{
     *     RecoveryPointSelection: RestoreTestingRecoveryPointSelection,
     *     RestoreTestingPlanName: string,
     *     ScheduleExpression: string,
     *     ScheduleExpressionTimezone?: string|null,
     *     StartWindowHours?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
