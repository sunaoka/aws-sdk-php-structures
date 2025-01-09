<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualServiceBackend $virtualService
 */
class Backend extends Shape
{
    /**
     * @param array{virtualService?: VirtualServiceBackend} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
