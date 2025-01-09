<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeContainerInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<string> $containerInstances
 * @property list<'TAGS'|'CONTAINER_INSTANCE_HEALTH'> $include
 */
class DescribeContainerInstancesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     containerInstances: list<string>,
     *     include?: list<'TAGS'|'CONTAINER_INSTANCE_HEALTH'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
