<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublicDestinationEndpointNetworkingConfiguration|null $Public
 * @property VpcDestinationEndpointNetworkingConfiguration|null $Vpc
 */
class StandardDestinationEndpointNetworkingConfiguration extends Shape
{
    /**
     * @param array{
     *     Public?: PublicDestinationEndpointNetworkingConfiguration|null,
     *     Vpc?: VpcDestinationEndpointNetworkingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
