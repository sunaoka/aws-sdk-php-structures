<?php

namespace Sunaoka\Aws\Structures\Swf\PollForActivityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\TaskList $taskList
 * @property string $identity
 */
class PollForActivityTaskRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     taskList: Shapes\TaskList,
     *     identity?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
