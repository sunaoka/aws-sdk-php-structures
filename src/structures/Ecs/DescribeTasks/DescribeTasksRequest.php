<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property list<string> $tasks
 * @property list<'TAGS'>|null $include
 */
class DescribeTasksRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     tasks: list<string>,
     *     include?: list<'TAGS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
