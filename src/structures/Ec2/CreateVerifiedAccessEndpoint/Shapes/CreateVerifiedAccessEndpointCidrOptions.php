<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'http'|'https'|'tcp'|null $Protocol
 * @property list<string>|null $SubnetIds
 * @property string|null $Cidr
 * @property list<CreateVerifiedAccessEndpointPortRange>|null $PortRanges
 */
class CreateVerifiedAccessEndpointCidrOptions extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'http'|'https'|'tcp'|null,
     *     SubnetIds?: list<string>|null,
     *     Cidr?: string|null,
     *     PortRanges?: list<CreateVerifiedAccessEndpointPortRange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
