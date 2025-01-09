<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\ListFlowExecutionMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property 'EXECUTION_STARTED'|'EXECUTION_FAILED'|'EXECUTION_ABORTED'|'EXECUTION_SUCCEEDED'|'STEP_STARTED'|'STEP_FAILED'|'STEP_SUCCEEDED'|'ACTIVITY_SCHEDULED'|'ACTIVITY_STARTED'|'ACTIVITY_FAILED'|'ACTIVITY_SUCCEEDED'|'START_FLOW_EXECUTION_TASK'|'SCHEDULE_NEXT_READY_STEPS_TASK'|'THING_ACTION_TASK'|'THING_ACTION_TASK_FAILED'|'THING_ACTION_TASK_SUCCEEDED'|'ACKNOWLEDGE_TASK_MESSAGE' $eventType
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string $payload
 */
class FlowExecutionMessage extends Shape
{
    /**
     * @param array{
     *     messageId?: string,
     *     eventType?: 'EXECUTION_STARTED'|'EXECUTION_FAILED'|'EXECUTION_ABORTED'|'EXECUTION_SUCCEEDED'|'STEP_STARTED'|'STEP_FAILED'|'STEP_SUCCEEDED'|'ACTIVITY_SCHEDULED'|'ACTIVITY_STARTED'|'ACTIVITY_FAILED'|'ACTIVITY_SUCCEEDED'|'START_FLOW_EXECUTION_TASK'|'SCHEDULE_NEXT_READY_STEPS_TASK'|'THING_ACTION_TASK'|'THING_ACTION_TASK_FAILED'|'THING_ACTION_TASK_SUCCEEDED'|'ACKNOWLEDGE_TASK_MESSAGE',
     *     timestamp?: \Aws\Api\DateTimeResult,
     *     payload?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
