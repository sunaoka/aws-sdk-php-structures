<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceIpAddress
 * @property int|null $SourceListenerPort
 * @property 'SECRETS_MANAGER'|'AUTOMATIC'|null $SourceEncryptionType
 * @property EndpointEncryptionConfiguration|null $SourceEncryptionConfiguration
 * @property 'STANDARD'|'ROUTER_OUTPUT'|null $SourceEndpointType
 */
class StandardDestinationEndpointConnectionDetails extends Shape
{
    /**
     * @param array{
     *     SourceIpAddress?: string|null,
     *     SourceListenerPort?: int|null,
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
