<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DenyCustomRoutingTraffic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointGroupArn
 * @property string $EndpointId
 * @property list<string> $DestinationAddresses
 * @property list<int<1, 65535>> $DestinationPorts
 * @property bool $DenyAllTrafficToEndpoint
 */
class DenyCustomRoutingTrafficRequest extends Request
{
    /**
     * @param array{
     *     EndpointGroupArn: string,
     *     EndpointId: string,
     *     DestinationAddresses?: list<string>,
     *     DestinationPorts?: list<int<1, 65535>>,
     *     DenyAllTrafficToEndpoint?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
