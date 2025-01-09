<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'http'|'https'|'tcp' $Protocol
 * @property list<string> $SubnetIds
 * @property string $Cidr
 * @property list<CreateVerifiedAccessEndpointPortRange> $PortRanges
 */
class CreateVerifiedAccessEndpointCidrOptions extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'http'|'https'|'tcp',
     *     SubnetIds?: list<string>,
     *     Cidr?: string,
     *     PortRanges?: list<CreateVerifiedAccessEndpointPortRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
