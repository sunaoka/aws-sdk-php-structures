<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationIpAddress
 * @property int|null $DestinationIngestPort
 * @property 'SECRETS_MANAGER'|'AUTOMATIC'|null $DestinationDecryptionType
 * @property EndpointEncryptionConfiguration|null $DestinationDecryptionConfiguration
 * @property 'STANDARD'|'ROUTER_INPUT'|null $DestinationEndpointType
 */
class StandardSourceEndpointConnectionDetails extends Shape
{
    /**
     * @param array{
     *     DestinationIpAddress?: string|null,
     *     DestinationIngestPort?: int|null,
     *     DestinationDecryptionType?: 'SECRETS_MANAGER'|'AUTOMATIC'|null,
     *     DestinationDecryptionConfiguration?: EndpointEncryptionConfiguration|null,
     *     DestinationEndpointType?: 'STANDARD'|'ROUTER_INPUT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
