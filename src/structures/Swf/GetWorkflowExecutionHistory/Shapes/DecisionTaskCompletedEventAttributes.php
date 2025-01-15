<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $executionContext
 * @property int $scheduledEventId
 * @property int $startedEventId
 * @property TaskList|null $taskList
 * @property string|null $taskListScheduleToStartTimeout
 */
class DecisionTaskCompletedEventAttributes extends Shape
{
    /**
     * @param array{
     *     executionContext?: string|null,
     *     scheduledEventId: int,
     *     startedEventId: int,
     *     taskList?: TaskList|null,
     *     taskListScheduleToStartTimeout?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
