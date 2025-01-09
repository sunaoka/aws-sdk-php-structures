<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property 'http'|'https'|'tcp' $Protocol
 * @property int $Port
 * @property list<ModifyVerifiedAccessEndpointPortRange> $PortRanges
 */
class ModifyVerifiedAccessEndpointLoadBalancerOptions extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>,
     *     Protocol?: 'http'|'https'|'tcp',
     *     Port?: int,
     *     PortRanges?: list<ModifyVerifiedAccessEndpointPortRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
