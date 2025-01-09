<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'http'|'https'|'tcp' $Protocol
 * @property int<1, 65535> $Port
 * @property string $LoadBalancerArn
 * @property list<string> $SubnetIds
 * @property list<CreateVerifiedAccessEndpointPortRange> $PortRanges
 */
class CreateVerifiedAccessEndpointLoadBalancerOptions extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'http'|'https'|'tcp',
     *     Port?: int<1, 65535>,
     *     LoadBalancerArn?: string,
     *     SubnetIds?: list<string>,
     *     PortRanges?: list<CreateVerifiedAccessEndpointPortRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
