<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCustomRoutingEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property string $EndpointGroupRegion
 * @property list<Shapes\CustomRoutingDestinationConfiguration> $DestinationConfigurations
 * @property string $IdempotencyToken
 */
class CreateCustomRoutingEndpointGroupRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     EndpointGroupRegion: string,
     *     DestinationConfigurations: list<Shapes\CustomRoutingDestinationConfiguration>,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
