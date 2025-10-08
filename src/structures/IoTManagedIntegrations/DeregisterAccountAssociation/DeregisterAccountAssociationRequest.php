<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeregisterAccountAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagedThingId
 * @property string $AccountAssociationId
 */
class DeregisterAccountAssociationRequest extends Request
{
    /**
     * @param array{
     *     ManagedThingId: string,
     *     AccountAssociationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
