<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $containerPort
 * @property int $hostPort
 * @property 'tcp'|'udp' $protocol
 * @property string $name
 * @property 'http'|'http2'|'grpc' $appProtocol
 * @property string $containerPortRange
 */
class PortMapping extends Shape
{
    /**
     * @param array{
     *     containerPort?: int,
     *     hostPort?: int,
     *     protocol?: 'tcp'|'udp',
     *     name?: string,
     *     appProtocol?: 'http'|'http2'|'grpc',
     *     containerPortRange?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
