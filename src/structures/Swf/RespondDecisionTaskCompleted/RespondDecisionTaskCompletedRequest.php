<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskToken
 * @property list<Shapes\Decision> $decisions
 * @property string $executionContext
 * @property Shapes\TaskList $taskList
 * @property string $taskListScheduleToStartTimeout
 */
class RespondDecisionTaskCompletedRequest extends Request
{
    /**
     * @param array{
     *     taskToken: string,
     *     decisions?: list<Shapes\Decision>,
     *     executionContext?: string,
     *     taskList?: Shapes\TaskList,
     *     taskListScheduleToStartTimeout?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
