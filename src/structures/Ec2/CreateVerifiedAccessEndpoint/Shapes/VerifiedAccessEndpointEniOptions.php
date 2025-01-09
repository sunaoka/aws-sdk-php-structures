<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInterfaceId
 * @property 'http'|'https'|'tcp' $Protocol
 * @property int<1, 65535> $Port
 * @property list<VerifiedAccessEndpointPortRange> $PortRanges
 */
class VerifiedAccessEndpointEniOptions extends Shape
{
    /**
     * @param array{
     *     NetworkInterfaceId?: string,
     *     Protocol?: 'http'|'https'|'tcp',
     *     Port?: int<1, 65535>,
     *     PortRanges?: list<VerifiedAccessEndpointPortRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
