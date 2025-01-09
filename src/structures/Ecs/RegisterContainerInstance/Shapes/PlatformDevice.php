<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterContainerInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'GPU' $type
 */
class PlatformDevice extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'GPU'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
