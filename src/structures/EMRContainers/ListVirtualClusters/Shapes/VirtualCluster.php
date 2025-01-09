<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListVirtualClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property 'RUNNING'|'TERMINATING'|'TERMINATED'|'ARRESTED' $state
 * @property ContainerProvider $containerProvider
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property array<string, string> $tags
 * @property string $securityConfigurationId
 */
class VirtualCluster extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     arn?: string,
     *     state?: 'RUNNING'|'TERMINATING'|'TERMINATED'|'ARRESTED',
     *     containerProvider?: ContainerProvider,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>,
     *     securityConfigurationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
