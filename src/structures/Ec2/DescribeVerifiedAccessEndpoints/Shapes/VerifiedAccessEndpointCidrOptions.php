<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property list<VerifiedAccessEndpointPortRange> $PortRanges
 * @property 'http'|'https'|'tcp' $Protocol
 * @property list<string> $SubnetIds
 */
class VerifiedAccessEndpointCidrOptions extends Shape
{
    /**
     * @param array{
     *     Cidr?: string,
     *     PortRanges?: list<VerifiedAccessEndpointPortRange>,
     *     Protocol?: 'http'|'https'|'tcp',
     *     SubnetIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
