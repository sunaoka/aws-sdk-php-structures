<?php

namespace Sunaoka\Aws\Structures\Swf\PollForActivityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\TaskList $taskList
 * @property string|null $identity
 */
class PollForActivityTaskRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     taskList: Shapes\TaskList,
     *     identity?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
