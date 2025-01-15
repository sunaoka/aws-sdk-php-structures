<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CoreNetworkId
 * @property string|null $CoreNetworkArn
 * @property string|null $GlobalNetworkId
 * @property string|null $OwnerAccountId
 * @property 'CREATING'|'UPDATING'|'AVAILABLE'|'DELETING'|null $State
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 */
class CoreNetworkSummary extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string|null,
     *     CoreNetworkArn?: string|null,
     *     GlobalNetworkId?: string|null,
     *     OwnerAccountId?: string|null,
     *     State?: 'CREATING'|'UPDATING'|'AVAILABLE'|'DELETING'|null,
     *     Description?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
