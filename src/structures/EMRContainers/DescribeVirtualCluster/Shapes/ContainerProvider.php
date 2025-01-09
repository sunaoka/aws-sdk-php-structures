<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeVirtualCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EKS' $type
 * @property string $id
 * @property ContainerInfo $info
 */
class ContainerProvider extends Shape
{
    /**
     * @param array{
     *     type: 'EKS',
     *     id: string,
     *     info?: ContainerInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
