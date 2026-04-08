<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProductInformation|null $product
 * @property OfferInformation|null $offer
 */
class ListingAssociatedEntity extends Shape
{
    /**
     * @param array{
     *     product?: ProductInformation|null,
     *     offer?: OfferInformation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
