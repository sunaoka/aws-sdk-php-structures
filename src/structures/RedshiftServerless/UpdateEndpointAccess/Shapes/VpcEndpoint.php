<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NetworkInterface> $networkInterfaces
 * @property string $vpcEndpointId
 * @property string $vpcId
 */
class VpcEndpoint extends Shape
{
    /**
     * @param array{
     *     networkInterfaces?: list<NetworkInterface>,
     *     vpcEndpointId?: string,
     *     vpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
