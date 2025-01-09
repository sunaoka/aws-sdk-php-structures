<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $CreatorRequestId
 * @property \Aws\Api\DateTimeResult $LastExecutionTime
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 * @property RestoreTestingRecoveryPointSelection $RecoveryPointSelection
 * @property string $RestoreTestingPlanArn
 * @property string $RestoreTestingPlanName
 * @property string $ScheduleExpression
 * @property string $ScheduleExpressionTimezone
 * @property int $StartWindowHours
 */
class RestoreTestingPlanForGet extends Shape
{
    /**
     * @param array{
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     CreatorRequestId?: string,
     *     LastExecutionTime?: \Aws\Api\DateTimeResult,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult,
     *     RecoveryPointSelection: RestoreTestingRecoveryPointSelection,
     *     RestoreTestingPlanArn: string,
     *     RestoreTestingPlanName: string,
     *     ScheduleExpression: string,
     *     ScheduleExpressionTimezone?: string,
     *     StartWindowHours?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
