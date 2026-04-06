<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchUpdateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property list<Shapes\BatchUpdateTaskItem> $tasks
 */
class BatchUpdateTaskRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     tasks: list<Shapes\BatchUpdateTaskItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
