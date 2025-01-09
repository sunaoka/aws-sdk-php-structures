<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CoreNetworkId
 * @property string $NetworkFunctionGroupName
 * @property string $EdgeLocation
 */
class CoreNetworkNetworkFunctionGroupIdentifier extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string,
     *     NetworkFunctionGroupName?: string,
     *     EdgeLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
