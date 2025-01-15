<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualServiceBackend|null $virtualService
 */
class Backend extends Shape
{
    /**
     * @param array{virtualService?: VirtualServiceBackend|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
