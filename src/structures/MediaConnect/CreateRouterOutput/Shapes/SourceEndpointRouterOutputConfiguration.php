<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MANAGED'|'UNMANAGED' $EndpointLifecycleManagement
 * @property 'SECRETS_MANAGER'|'AUTOMATIC'|null $DestinationTransitEncryptionType
 * @property EndpointEncryptionConfiguration $DestinationTransitEncryption
 */
class SourceEndpointRouterOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     EndpointLifecycleManagement: 'MANAGED'|'UNMANAGED',
     *     DestinationTransitEncryptionType?: 'SECRETS_MANAGER'|'AUTOMATIC'|null,
     *     DestinationTransitEncryption: EndpointEncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
