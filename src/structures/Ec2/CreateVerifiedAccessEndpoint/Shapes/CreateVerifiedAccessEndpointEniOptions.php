<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInterfaceId
 * @property 'http'|'https'|'tcp'|null $Protocol
 * @property int<1, 65535>|null $Port
 * @property list<CreateVerifiedAccessEndpointPortRange>|null $PortRanges
 */
class CreateVerifiedAccessEndpointEniOptions extends Shape
{
    /**
     * @param array{
     *     NetworkInterfaceId?: string|null,
     *     Protocol?: 'http'|'https'|'tcp'|null,
     *     Port?: int<1, 65535>|null,
     *     PortRanges?: list<CreateVerifiedAccessEndpointPortRange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
