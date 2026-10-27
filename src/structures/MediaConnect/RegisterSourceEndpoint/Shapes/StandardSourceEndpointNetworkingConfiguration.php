<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RegisterSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublicSourceEndpointNetworkingConfiguration|null $Public
 * @property VpcSourceEndpointNetworkingConfiguration|null $Vpc
 */
class StandardSourceEndpointNetworkingConfiguration extends Shape
{
    /**
     * @param array{
     *     Public?: PublicSourceEndpointNetworkingConfiguration|null,
     *     Vpc?: VpcSourceEndpointNetworkingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
