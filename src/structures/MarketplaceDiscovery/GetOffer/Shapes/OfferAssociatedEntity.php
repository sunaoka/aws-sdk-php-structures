<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOffer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProductInformation $product
 * @property OfferSetInformation|null $offerSet
 */
class OfferAssociatedEntity extends Shape
{
    /**
     * @param array{
     *     product: ProductInformation,
     *     offerSet?: OfferSetInformation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
