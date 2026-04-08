<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListPurchaseOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProductInformation $product
 * @property OfferInformation $offer
 * @property OfferSetInformation|null $offerSet
 */
class PurchaseOptionAssociatedEntity extends Shape
{
    /**
     * @param array{
     *     product: ProductInformation,
     *     offer: OfferInformation,
     *     offerSet?: OfferSetInformation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
