<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AllowCustomRoutingTraffic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointGroupArn
 * @property string $EndpointId
 * @property list<string> $DestinationAddresses
 * @property list<int> $DestinationPorts
 * @property bool $AllowAllTrafficToEndpoint
 */
class AllowCustomRoutingTrafficRequest extends Request
{
    /**
     * @param array{
     *     EndpointGroupArn: string,
     *     EndpointId: string,
     *     DestinationAddresses?: list<string>,
     *     DestinationPorts?: list<int>,
     *     AllowAllTrafficToEndpoint?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
