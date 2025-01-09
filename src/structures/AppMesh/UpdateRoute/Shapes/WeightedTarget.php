<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $port
 * @property string $virtualNode
 * @property int<0, 100> $weight
 */
class WeightedTarget extends Shape
{
    /**
     * @param array{
     *     port?: int<1, 65535>,
     *     virtualNode: string,
     *     weight: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
