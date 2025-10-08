<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\RegisterAccountAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagedThingId
 * @property string $AccountAssociationId
 * @property string $DeviceDiscoveryId
 */
class RegisterAccountAssociationRequest extends Request
{
    /**
     * @param array{
     *     ManagedThingId: string,
     *     AccountAssociationId: string,
     *     DeviceDiscoveryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
