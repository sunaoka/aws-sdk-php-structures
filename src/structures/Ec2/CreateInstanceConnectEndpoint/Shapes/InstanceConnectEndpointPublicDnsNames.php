<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceConnectEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceConnectEndpointDnsNames|null $Ipv4
 * @property InstanceConnectEndpointDnsNames|null $Dualstack
 */
class InstanceConnectEndpointPublicDnsNames extends Shape
{
    /**
     * @param array{
     *     Ipv4?: InstanceConnectEndpointDnsNames|null,
     *     Dualstack?: InstanceConnectEndpointDnsNames|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
