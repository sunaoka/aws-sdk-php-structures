<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<string> $tasks
 * @property list<'TAGS'> $include
 */
class DescribeTasksRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     tasks: list<string>,
     *     include?: list<'TAGS'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
