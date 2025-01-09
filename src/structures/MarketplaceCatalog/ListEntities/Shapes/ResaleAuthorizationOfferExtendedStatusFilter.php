<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ValueList
 */
class ResaleAuthorizationOfferExtendedStatusFilter extends Shape
{
    /**
     * @param array{ValueList?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
