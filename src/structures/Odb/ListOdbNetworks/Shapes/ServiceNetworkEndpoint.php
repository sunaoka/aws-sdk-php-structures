<?php

namespace Sunaoka\Aws\Structures\Odb\ListOdbNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vpcEndpointId
 * @property 'SERVICENETWORK'|null $vpcEndpointType
 */
class ServiceNetworkEndpoint extends Shape
{
    /**
     * @param array{
     *     vpcEndpointId?: string|null,
     *     vpcEndpointType?: 'SERVICENETWORK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
