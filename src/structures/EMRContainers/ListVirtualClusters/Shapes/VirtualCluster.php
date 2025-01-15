<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListVirtualClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $arn
 * @property 'RUNNING'|'TERMINATING'|'TERMINATED'|'ARRESTED'|null $state
 * @property ContainerProvider|null $containerProvider
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property array<string, string>|null $tags
 * @property string|null $securityConfigurationId
 */
class VirtualCluster extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     arn?: string|null,
     *     state?: 'RUNNING'|'TERMINATING'|'TERMINATED'|'ARRESTED'|null,
     *     containerProvider?: ContainerProvider|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null,
     *     securityConfigurationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
