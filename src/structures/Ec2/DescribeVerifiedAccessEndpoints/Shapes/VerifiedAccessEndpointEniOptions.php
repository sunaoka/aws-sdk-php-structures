<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInterfaceId
 * @property 'http'|'https'|'tcp'|null $Protocol
 * @property int<1, 65535>|null $Port
 * @property list<VerifiedAccessEndpointPortRange>|null $PortRanges
 */
class VerifiedAccessEndpointEniOptions extends Shape
{
    /**
     * @param array{
     *     NetworkInterfaceId?: string|null,
     *     Protocol?: 'http'|'https'|'tcp'|null,
     *     Port?: int<1, 65535>|null,
     *     PortRanges?: list<VerifiedAccessEndpointPortRange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
