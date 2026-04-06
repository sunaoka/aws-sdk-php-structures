<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworkPrefixListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CoreNetworkId
 * @property string|null $PrefixListArn
 * @property string|null $PrefixListAlias
 */
class PrefixListAssociation extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string|null,
     *     PrefixListArn?: string|null,
     *     PrefixListAlias?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
