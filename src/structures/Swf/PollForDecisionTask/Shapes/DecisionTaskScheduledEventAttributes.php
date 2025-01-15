<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TaskList $taskList
 * @property string|null $taskPriority
 * @property string|null $startToCloseTimeout
 * @property string|null $scheduleToStartTimeout
 */
class DecisionTaskScheduledEventAttributes extends Shape
{
    /**
     * @param array{
     *     taskList: TaskList,
     *     taskPriority?: string|null,
     *     startToCloseTimeout?: string|null,
     *     scheduleToStartTimeout?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
