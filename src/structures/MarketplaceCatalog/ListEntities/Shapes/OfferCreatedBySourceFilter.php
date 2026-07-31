<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Seller'|'AwsMarketplace'>|null $ValueList
 */
class OfferCreatedBySourceFilter extends Shape
{
    /**
     * @param array{ValueList?: list<'Seller'|'AwsMarketplace'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
