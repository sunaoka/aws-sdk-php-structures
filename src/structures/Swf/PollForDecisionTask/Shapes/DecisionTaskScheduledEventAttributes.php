<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TaskList $taskList
 * @property string $taskPriority
 * @property string $startToCloseTimeout
 * @property string $scheduleToStartTimeout
 */
class DecisionTaskScheduledEventAttributes extends Shape
{
    /**
     * @param array{
     *     taskList: TaskList,
     *     taskPriority?: string,
     *     startToCloseTimeout?: string,
     *     scheduleToStartTimeout?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
