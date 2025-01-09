<?php

namespace Sunaoka\Aws\Structures\Swf\CountPendingDecisionTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\TaskList $taskList
 */
class CountPendingDecisionTasksRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     taskList: Shapes\TaskList
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
