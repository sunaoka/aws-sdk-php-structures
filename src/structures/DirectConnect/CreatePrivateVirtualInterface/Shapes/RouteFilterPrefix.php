<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreatePrivateVirtualInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cidr
 */
class RouteFilterPrefix extends Shape
{
    /**
     * @param array{cidr?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
