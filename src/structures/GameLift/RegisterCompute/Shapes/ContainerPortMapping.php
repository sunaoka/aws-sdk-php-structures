<?php

namespace Sunaoka\Aws\Structures\GameLift\RegisterCompute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 60000>|null $ContainerPort
 * @property int<1, 60000>|null $ConnectionPort
 * @property 'TCP'|'UDP'|null $Protocol
 */
class ContainerPortMapping extends Shape
{
    /**
     * @param array{
     *     ContainerPort?: int<1, 60000>|null,
     *     ConnectionPort?: int<1, 60000>|null,
     *     Protocol?: 'TCP'|'UDP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
