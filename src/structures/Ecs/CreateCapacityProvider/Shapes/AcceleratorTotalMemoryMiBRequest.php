<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $min
 * @property int|null $max
 */
class AcceleratorTotalMemoryMiBRequest extends Shape
{
    /**
     * @param array{
     *     min?: int|null,
     *     max?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
