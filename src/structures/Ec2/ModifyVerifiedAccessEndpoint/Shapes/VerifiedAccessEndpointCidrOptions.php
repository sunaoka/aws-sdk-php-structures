<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property list<VerifiedAccessEndpointPortRange>|null $PortRanges
 * @property 'http'|'https'|'tcp'|null $Protocol
 * @property list<string>|null $SubnetIds
 */
class VerifiedAccessEndpointCidrOptions extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     PortRanges?: list<VerifiedAccessEndpointPortRange>|null,
     *     Protocol?: 'http'|'https'|'tcp'|null,
     *     SubnetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
