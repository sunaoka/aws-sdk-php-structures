<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DenyCustomRoutingTraffic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointGroupArn
 * @property string $EndpointId
 * @property list<string>|null $DestinationAddresses
 * @property list<int<1, 65535>>|null $DestinationPorts
 * @property bool|null $DenyAllTrafficToEndpoint
 */
class DenyCustomRoutingTrafficRequest extends Request
{
    /**
     * @param array{
     *     EndpointGroupArn: string,
     *     EndpointId: string,
     *     DestinationAddresses?: list<string>|null,
     *     DestinationPorts?: list<int<1, 65535>>|null,
     *     DenyAllTrafficToEndpoint?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
