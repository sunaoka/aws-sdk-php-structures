<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $service
 * @property list<string> $taskSets
 * @property list<'TAGS'> $include
 */
class DescribeTaskSetsRequest extends Request
{
    /**
     * @param array{
     *     cluster: string,
     *     service: string,
     *     taskSets?: list<string>,
     *     include?: list<'TAGS'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
