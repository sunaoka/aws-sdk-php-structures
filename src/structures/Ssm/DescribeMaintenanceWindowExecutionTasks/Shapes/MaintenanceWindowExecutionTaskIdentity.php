<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutionTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WindowExecutionId
 * @property string $TaskExecutionId
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING' $Status
 * @property string $StatusDetails
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $TaskArn
 * @property 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA' $TaskType
 * @property AlarmConfiguration $AlarmConfiguration
 * @property list<AlarmStateInformation> $TriggeredAlarms
 */
class MaintenanceWindowExecutionTaskIdentity extends Shape
{
    /**
     * @param array{
     *     WindowExecutionId?: string,
     *     TaskExecutionId?: string,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING',
     *     StatusDetails?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     TaskArn?: string,
     *     TaskType?: 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA',
     *     AlarmConfiguration?: AlarmConfiguration,
     *     TriggeredAlarms?: list<AlarmStateInformation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
