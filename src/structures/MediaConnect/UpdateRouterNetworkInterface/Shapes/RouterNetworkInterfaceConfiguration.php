<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublicRouterNetworkInterfaceConfiguration|null $Public
 * @property VpcRouterNetworkInterfaceConfiguration|null $Vpc
 */
class RouterNetworkInterfaceConfiguration extends Shape
{
    /**
     * @param array{
     *     Public?: PublicRouterNetworkInterfaceConfiguration|null,
     *     Vpc?: VpcRouterNetworkInterfaceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
