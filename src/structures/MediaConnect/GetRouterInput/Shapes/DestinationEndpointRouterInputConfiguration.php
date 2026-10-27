<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MANAGED'|'UNMANAGED' $EndpointLifecycleManagement
 * @property 'SECRETS_MANAGER'|'AUTOMATIC'|null $SourceTransitDecryptionType
 * @property EndpointEncryptionConfiguration $SourceTransitDecryption
 */
class DestinationEndpointRouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     EndpointLifecycleManagement: 'MANAGED'|'UNMANAGED',
     *     SourceTransitDecryptionType?: 'SECRETS_MANAGER'|'AUTOMATIC'|null,
     *     SourceTransitDecryption: EndpointEncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
