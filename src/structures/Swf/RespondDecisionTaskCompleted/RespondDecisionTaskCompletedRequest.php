<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskToken
 * @property list<Shapes\Decision>|null $decisions
 * @property string|null $executionContext
 * @property Shapes\TaskList|null $taskList
 * @property string|null $taskListScheduleToStartTimeout
 */
class RespondDecisionTaskCompletedRequest extends Request
{
    /**
     * @param array{
     *     taskToken: string,
     *     decisions?: list<Shapes\Decision>|null,
     *     executionContext?: string|null,
     *     taskList?: Shapes\TaskList|null,
     *     taskListScheduleToStartTimeout?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
