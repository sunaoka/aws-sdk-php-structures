<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string|null $CreatorRequestId
 * @property \Aws\Api\DateTimeResult|null $LastExecutionTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property RestoreTestingRecoveryPointSelection $RecoveryPointSelection
 * @property string $RestoreTestingPlanArn
 * @property string $RestoreTestingPlanName
 * @property string $ScheduleExpression
 * @property string|null $ScheduleExpressionTimezone
 * @property int|null $StartWindowHours
 */
class RestoreTestingPlanForGet extends Shape
{
    /**
     * @param array{
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     CreatorRequestId?: string|null,
     *     LastExecutionTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     RecoveryPointSelection: RestoreTestingRecoveryPointSelection,
     *     RestoreTestingPlanArn: string,
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
