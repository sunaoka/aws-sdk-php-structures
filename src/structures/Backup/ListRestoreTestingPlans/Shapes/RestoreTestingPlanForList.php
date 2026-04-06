<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreTestingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastExecutionTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property string $RestoreTestingPlanArn
 * @property string $RestoreTestingPlanName
 * @property string $ScheduleExpression
 * @property string|null $ScheduleExpressionTimezone
 * @property int|null $StartWindowHours
 */
class RestoreTestingPlanForList extends Shape
{
    /**
     * @param array{
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastExecutionTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null,
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
