<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $virtualRouterName
 */
class VirtualRouterServiceProvider extends Shape
{
    /**
     * @param array{virtualRouterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
