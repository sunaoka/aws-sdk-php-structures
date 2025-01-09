<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $port
 * @property string $virtualNode
 * @property int $weight
 */
class WeightedTarget extends Shape
{
    /**
     * @param array{
     *     port?: int,
     *     virtualNode: string,
     *     weight: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
