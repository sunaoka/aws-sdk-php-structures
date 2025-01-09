<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bindIP
 * @property int $containerPort
 * @property int $hostPort
 * @property 'tcp'|'udp' $protocol
 * @property string $containerPortRange
 * @property string $hostPortRange
 */
class NetworkBinding extends Shape
{
    /**
     * @param array{
     *     bindIP?: string,
     *     containerPort?: int,
     *     hostPort?: int,
     *     protocol?: 'tcp'|'udp',
     *     containerPortRange?: string,
     *     hostPortRange?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
