<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListPurchaseOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sellerProfileId
 * @property string $displayName
 */
class SellerInformation extends Shape
{
    /**
     * @param array{
     *     sellerProfileId: string,
     *     displayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
