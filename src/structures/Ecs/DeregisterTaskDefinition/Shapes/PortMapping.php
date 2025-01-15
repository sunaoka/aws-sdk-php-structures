<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $containerPort
 * @property int|null $hostPort
 * @property 'tcp'|'udp'|null $protocol
 * @property string|null $name
 * @property 'http'|'http2'|'grpc'|null $appProtocol
 * @property string|null $containerPortRange
 */
class PortMapping extends Shape
{
    /**
     * @param array{
     *     containerPort?: int|null,
     *     hostPort?: int|null,
     *     protocol?: 'tcp'|'udp'|null,
     *     name?: string|null,
     *     appProtocol?: 'http'|'http2'|'grpc'|null,
     *     containerPortRange?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
