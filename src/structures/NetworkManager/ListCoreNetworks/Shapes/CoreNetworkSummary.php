<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CoreNetworkId
 * @property string $CoreNetworkArn
 * @property string $GlobalNetworkId
 * @property string $OwnerAccountId
 * @property 'CREATING'|'UPDATING'|'AVAILABLE'|'DELETING' $State
 * @property string $Description
 * @property list<Tag> $Tags
 */
class CoreNetworkSummary extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string,
     *     CoreNetworkArn?: string,
     *     GlobalNetworkId?: string,
     *     OwnerAccountId?: string,
     *     State?: 'CREATING'|'UPDATING'|'AVAILABLE'|'DELETING',
     *     Description?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
