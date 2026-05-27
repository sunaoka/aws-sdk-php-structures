<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterContainerInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'GPU'|'NEURON_DEVICE' $type
 */
class PlatformDevice extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'GPU'|'NEURON_DEVICE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
