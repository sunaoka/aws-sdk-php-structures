<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClientPolicy|null $clientPolicy
 */
class BackendDefaults extends Shape
{
    /**
     * @param array{clientPolicy?: ClientPolicy|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
