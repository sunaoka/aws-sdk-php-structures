<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListPurchaseOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $offerId
 * @property string|null $offerName
 * @property SellerInformation $sellerOfRecord
 */
class OfferInformation extends Shape
{
    /**
     * @param array{
     *     offerId: string,
     *     offerName?: string|null,
     *     sellerOfRecord: SellerInformation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
