<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECRETS_MANAGER'|'AUTOMATIC'|null $SourceEncryptionType
 * @property EndpointEncryptionConfiguration|null $SourceEncryptionConfiguration
 * @property 'STANDARD'|'ROUTER_OUTPUT'|null $SourceEndpointType
 */
class RouterInputDestinationEndpointConnectionDetails extends Shape
{
    /**
     * @param array{
     *     SourceEncryptionType?: 'SECRETS_MANAGER'|'AUTOMATIC'|null,
     *     SourceEncryptionConfiguration?: EndpointEncryptionConfiguration|null,
     *     SourceEndpointType?: 'STANDARD'|'ROUTER_OUTPUT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
