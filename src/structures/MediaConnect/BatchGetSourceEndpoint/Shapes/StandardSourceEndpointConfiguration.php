<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property StandardSourceEndpointNetworkingConfiguration $SourceNetworkingConfiguration
 * @property StandardSourceEndpointProtocolConfiguration $ProtocolConfiguration
 * @property 'PUBLIC'|'VPC'|null $SourceNetworkingType
 * @property 'RTP'|'RIST'|'SRT_CALLER'|'SRT_LISTENER'|null $Protocol
 */
class StandardSourceEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     SourceNetworkingConfiguration: StandardSourceEndpointNetworkingConfiguration,
     *     ProtocolConfiguration: StandardSourceEndpointProtocolConfiguration,
     *     SourceNetworkingType?: 'PUBLIC'|'VPC'|null,
     *     Protocol?: 'RTP'|'RIST'|'SRT_CALLER'|'SRT_LISTENER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
