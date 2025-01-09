<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualNodeServiceProvider $virtualNode
 * @property VirtualRouterServiceProvider $virtualRouter
 */
class VirtualServiceProvider extends Shape
{
    /**
     * @param array{
     *     virtualNode?: VirtualNodeServiceProvider,
     *     virtualRouter?: VirtualRouterServiceProvider
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
