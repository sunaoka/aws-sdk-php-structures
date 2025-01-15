<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NetworkInterface>|null $networkInterfaces
 * @property string|null $vpcEndpointId
 * @property string|null $vpcId
 */
class VpcEndpoint extends Shape
{
    /**
     * @param array{
     *     networkInterfaces?: list<NetworkInterface>|null,
     *     vpcEndpointId?: string|null,
     *     vpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
