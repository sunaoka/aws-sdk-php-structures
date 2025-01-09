<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionContext
 * @property int $scheduledEventId
 * @property int $startedEventId
 * @property TaskList $taskList
 * @property string $taskListScheduleToStartTimeout
 */
class DecisionTaskCompletedEventAttributes extends Shape
{
    /**
     * @param array{
     *     executionContext?: string,
     *     scheduledEventId: int,
     *     startedEventId: int,
     *     taskList?: TaskList,
     *     taskListScheduleToStartTimeout?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
