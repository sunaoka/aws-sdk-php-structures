<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreTestingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastExecutionTime
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 * @property string $RestoreTestingPlanArn
 * @property string $RestoreTestingPlanName
 * @property string $ScheduleExpression
 * @property string $ScheduleExpressionTimezone
 * @property int $StartWindowHours
 */
class RestoreTestingPlanForList extends Shape
{
    /**
     * @param array{
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastExecutionTime?: \Aws\Api\DateTimeResult,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult,
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
