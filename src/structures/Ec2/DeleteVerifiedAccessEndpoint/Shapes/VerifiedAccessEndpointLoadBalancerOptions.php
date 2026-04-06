<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'http'|'https'|'tcp'|null $Protocol
 * @property int<1, 65535>|null $Port
 * @property string|null $LoadBalancerArn
 * @property list<string>|null $SubnetIds
 * @property list<VerifiedAccessEndpointPortRange>|null $PortRanges
 */
class VerifiedAccessEndpointLoadBalancerOptions extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'http'|'https'|'tcp'|null,
     *     Port?: int<1, 65535>|null,
     *     LoadBalancerArn?: string|null,
     *     SubnetIds?: list<string>|null,
     *     PortRanges?: list<VerifiedAccessEndpointPortRange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
