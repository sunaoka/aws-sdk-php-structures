<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECRETS_MANAGER'|'AUTOMATIC'|null $DestinationDecryptionType
 * @property EndpointEncryptionConfiguration|null $DestinationDecryptionConfiguration
 * @property 'STANDARD'|'ROUTER_INPUT'|null $DestinationEndpointType
 */
class RouterOutputSourceEndpointConnectionDetails extends Shape
{
    /**
     * @param array{
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
