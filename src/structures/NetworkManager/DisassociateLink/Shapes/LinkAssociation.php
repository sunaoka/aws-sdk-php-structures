<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DisassociateLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlobalNetworkId
 * @property string $DeviceId
 * @property string $LinkId
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED' $LinkAssociationState
 */
class LinkAssociation extends Shape
{
    /**
     * @param array{
     *     GlobalNetworkId?: string,
     *     DeviceId?: string,
     *     LinkId?: string,
     *     LinkAssociationState?: 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
