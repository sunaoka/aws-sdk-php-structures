<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeContainerInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property list<string> $containerInstances
 * @property list<'TAGS'|'CONTAINER_INSTANCE_HEALTH'>|null $include
 */
class DescribeContainerInstancesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     containerInstances: list<string>,
     *     include?: list<'TAGS'|'CONTAINER_INSTANCE_HEALTH'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
