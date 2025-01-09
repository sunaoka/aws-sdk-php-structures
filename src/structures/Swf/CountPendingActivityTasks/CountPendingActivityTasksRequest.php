<?php

namespace Sunaoka\Aws\Structures\Swf\CountPendingActivityTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\TaskList $taskList
 */
class CountPendingActivityTasksRequest extends Request
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
