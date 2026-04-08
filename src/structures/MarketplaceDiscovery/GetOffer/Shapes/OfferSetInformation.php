<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOffer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $offerSetId
 * @property SellerInformation $sellerOfRecord
 */
class OfferSetInformation extends Shape
{
    /**
     * @param array{
     *     offerSetId: string,
     *     sellerOfRecord: SellerInformation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
