<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\ListFlowExecutionMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $messageId
 * @property 'EXECUTION_STARTED'|'EXECUTION_FAILED'|'EXECUTION_ABORTED'|'EXECUTION_SUCCEEDED'|'STEP_STARTED'|'STEP_FAILED'|'STEP_SUCCEEDED'|'ACTIVITY_SCHEDULED'|'ACTIVITY_STARTED'|'ACTIVITY_FAILED'|'ACTIVITY_SUCCEEDED'|'START_FLOW_EXECUTION_TASK'|'SCHEDULE_NEXT_READY_STEPS_TASK'|'THING_ACTION_TASK'|'THING_ACTION_TASK_FAILED'|'THING_ACTION_TASK_SUCCEEDED'|'ACKNOWLEDGE_TASK_MESSAGE'|null $eventType
 * @property \Aws\Api\DateTimeResult|null $timestamp
 * @property string|null $payload
 */
class FlowExecutionMessage extends Shape
{
    /**
     * @param array{
     *     messageId?: string|null,
     *     eventType?: 'EXECUTION_STARTED'|'EXECUTION_FAILED'|'EXECUTION_ABORTED'|'EXECUTION_SUCCEEDED'|'STEP_STARTED'|'STEP_FAILED'|'STEP_SUCCEEDED'|'ACTIVITY_SCHEDULED'|'ACTIVITY_STARTED'|'ACTIVITY_FAILED'|'ACTIVITY_SUCCEEDED'|'START_FLOW_EXECUTION_TASK'|'SCHEDULE_NEXT_READY_STEPS_TASK'|'THING_ACTION_TASK'|'THING_ACTION_TASK_FAILED'|'THING_ACTION_TASK_SUCCEEDED'|'ACKNOWLEDGE_TASK_MESSAGE'|null,
     *     timestamp?: \Aws\Api\DateTimeResult|null,
     *     payload?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
