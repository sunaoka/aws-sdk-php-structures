<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetLinkAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GlobalNetworkId
 * @property string|null $DeviceId
 * @property string|null $LinkId
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED'|null $LinkAssociationState
 */
class LinkAssociation extends Shape
{
    /**
     * @param array{
     *     GlobalNetworkId?: string|null,
     *     DeviceId?: string|null,
     *     LinkId?: string|null,
     *     LinkAssociationState?: 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
