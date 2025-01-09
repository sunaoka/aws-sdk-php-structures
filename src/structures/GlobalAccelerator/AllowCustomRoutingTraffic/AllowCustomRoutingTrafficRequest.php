<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AllowCustomRoutingTraffic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointGroupArn
 * @property string $EndpointId
 * @property list<string> $DestinationAddresses
 * @property list<int<1, 65535>> $DestinationPorts
 * @property bool $AllowAllTrafficToEndpoint
 */
class AllowCustomRoutingTrafficRequest extends Request
{
    /**
     * @param array{
     *     EndpointGroupArn: string,
     *     EndpointId: string,
     *     DestinationAddresses?: list<string>,
     *     DestinationPorts?: list<int<1, 65535>>,
     *     AllowAllTrafficToEndpoint?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
