<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualServiceProvider|null $provider
 */
class VirtualServiceSpec extends Shape
{
    /**
     * @param array{provider?: VirtualServiceProvider|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
