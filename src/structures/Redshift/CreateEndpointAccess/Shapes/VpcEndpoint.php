<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcEndpointId
 * @property string|null $VpcId
 * @property list<NetworkInterface>|null $NetworkInterfaces
 */
class VpcEndpoint extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string|null,
     *     VpcId?: string|null,
     *     NetworkInterfaces?: list<NetworkInterface>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
