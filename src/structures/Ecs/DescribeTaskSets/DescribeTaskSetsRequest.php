<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $service
 * @property list<string>|null $taskSets
 * @property list<'TAGS'>|null $include
 */
class DescribeTaskSetsRequest extends Request
{
    /**
     * @param array{
     *     cluster: string,
     *     service: string,
     *     taskSets?: list<string>|null,
     *     include?: list<'TAGS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
