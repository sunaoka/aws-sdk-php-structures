<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ChannelPartner'|'Distributor'>|null $ValueList
 */
class ResaleAuthorizationResellerRoleFilter extends Shape
{
    /**
     * @param array{ValueList?: list<'ChannelPartner'|'Distributor'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
