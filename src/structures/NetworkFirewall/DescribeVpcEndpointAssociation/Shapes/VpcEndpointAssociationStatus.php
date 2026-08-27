<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeVpcEndpointAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONING'|'DELETING'|'READY'|'FAILED' $Status
 * @property array<string, AZSyncState>|null $AssociationSyncState
 */
class VpcEndpointAssociationStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'PROVISIONING'|'DELETING'|'READY'|'FAILED',
     *     AssociationSyncState?: array<string, AZSyncState>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
