<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateVirtualCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EKS' $type
 * @property string $id
 * @property ContainerInfo|null $info
 */
class ContainerProvider extends Shape
{
    /**
     * @param array{
     *     type: 'EKS',
     *     id: string,
     *     info?: ContainerInfo|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
