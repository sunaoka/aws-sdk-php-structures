<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListListeners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535>|null $FromPort
 * @property int<1, 65535>|null $ToPort
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     FromPort?: int<1, 65535>|null,
     *     ToPort?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
