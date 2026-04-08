<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $productId
 * @property string $productName
 * @property SellerInformation $manufacturer
 */
class ProductInformation extends Shape
{
    /**
     * @param array{
     *     productId: string,
     *     productName: string,
     *     manufacturer: SellerInformation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
