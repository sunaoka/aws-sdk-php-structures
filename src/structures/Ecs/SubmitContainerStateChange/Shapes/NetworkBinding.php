<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitContainerStateChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bindIP
 * @property int|null $containerPort
 * @property int|null $hostPort
 * @property 'tcp'|'udp'|null $protocol
 * @property string|null $containerPortRange
 * @property string|null $hostPortRange
 */
class NetworkBinding extends Shape
{
    /**
     * @param array{
     *     bindIP?: string|null,
     *     containerPort?: int|null,
     *     hostPort?: int|null,
     *     protocol?: 'tcp'|'udp'|null,
     *     containerPortRange?: string|null,
     *     hostPortRange?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
