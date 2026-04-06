<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SubnetIds
 * @property 'http'|'https'|'tcp'|null $Protocol
 * @property int<1, 65535>|null $Port
 * @property list<ModifyVerifiedAccessEndpointPortRange>|null $PortRanges
 */
class ModifyVerifiedAccessEndpointLoadBalancerOptions extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>|null,
     *     Protocol?: 'http'|'https'|'tcp'|null,
     *     Port?: int<1, 65535>|null,
     *     PortRanges?: list<ModifyVerifiedAccessEndpointPortRange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
