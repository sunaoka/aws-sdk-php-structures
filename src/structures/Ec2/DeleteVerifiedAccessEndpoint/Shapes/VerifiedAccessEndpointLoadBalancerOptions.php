<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'http'|'https'|'tcp' $Protocol
 * @property int $Port
 * @property string $LoadBalancerArn
 * @property list<string> $SubnetIds
 * @property list<VerifiedAccessEndpointPortRange> $PortRanges
 */
class VerifiedAccessEndpointLoadBalancerOptions extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'http'|'https'|'tcp',
     *     Port?: int,
     *     LoadBalancerArn?: string,
     *     SubnetIds?: list<string>,
     *     PortRanges?: list<VerifiedAccessEndpointPortRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
