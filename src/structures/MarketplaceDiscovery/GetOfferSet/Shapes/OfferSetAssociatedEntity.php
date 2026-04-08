<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProductInformation $product
 * @property OfferInformation $offer
 */
class OfferSetAssociatedEntity extends Shape
{
    /**
     * @param array{
     *     product: ProductInformation,
     *     offer: OfferInformation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
