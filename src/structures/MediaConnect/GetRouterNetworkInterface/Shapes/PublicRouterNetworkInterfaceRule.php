<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 */
class PublicRouterNetworkInterfaceRule extends Shape
{
    /**
     * @param array{Cidr: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
