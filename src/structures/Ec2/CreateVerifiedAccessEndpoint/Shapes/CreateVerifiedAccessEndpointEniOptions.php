<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInterfaceId
 * @property 'http'|'https'|'tcp' $Protocol
 * @property int $Port
 * @property list<CreateVerifiedAccessEndpointPortRange> $PortRanges
 */
class CreateVerifiedAccessEndpointEniOptions extends Shape
{
    /**
     * @param array{
     *     NetworkInterfaceId?: string,
     *     Protocol?: 'http'|'https'|'tcp',
     *     Port?: int,
     *     PortRanges?: list<CreateVerifiedAccessEndpointPortRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
