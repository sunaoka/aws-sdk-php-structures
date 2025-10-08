<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateVpcEndpointAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONING'|'DELETING'|'READY' $Status
 * @property array<string, AZSyncState>|null $AssociationSyncState
 */
class VpcEndpointAssociationStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'PROVISIONING'|'DELETING'|'READY',
     *     AssociationSyncState?: array<string, AZSyncState>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
