<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property StandardDestinationEndpointNetworkingConfiguration $DestinationNetworkingConfiguration
 * @property StandardDestinationEndpointProtocolConfiguration $ProtocolConfiguration
 * @property 'PUBLIC'|'VPC'|null $DestinationNetworkingType
 * @property 'RTP'|'RIST'|'SRT_CALLER'|'SRT_LISTENER'|null $Protocol
 */
class StandardDestinationEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     DestinationNetworkingConfiguration: StandardDestinationEndpointNetworkingConfiguration,
     *     ProtocolConfiguration: StandardDestinationEndpointProtocolConfiguration,
     *     DestinationNetworkingType?: 'PUBLIC'|'VPC'|null,
     *     Protocol?: 'RTP'|'RIST'|'SRT_CALLER'|'SRT_LISTENER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
