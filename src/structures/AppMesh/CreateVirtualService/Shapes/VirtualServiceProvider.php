<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualNodeServiceProvider|null $virtualNode
 * @property VirtualRouterServiceProvider|null $virtualRouter
 */
class VirtualServiceProvider extends Shape
{
    /**
     * @param array{
     *     virtualNode?: VirtualNodeServiceProvider|null,
     *     virtualRouter?: VirtualRouterServiceProvider|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
