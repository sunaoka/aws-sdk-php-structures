<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualServiceProvider $provider
 */
class VirtualServiceSpec extends Shape
{
    /**
     * @param array{provider?: VirtualServiceProvider} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
