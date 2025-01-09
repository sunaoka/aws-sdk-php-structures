<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $virtualNodeName
 */
class VirtualNodeServiceProvider extends Shape
{
    /**
     * @param array{virtualNodeName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
