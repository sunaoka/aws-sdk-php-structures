<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetMarketplaceRevenueShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductId
 * @property string|null $ProductCode
 * @property string|null $ProductName
 * @property list<RevenueShareProductAccountDetail>|null $Accounts
 */
class MarketplaceRevenueShareProductDetail extends Shape
{
    /**
     * @param array{
     *     ProductId: string,
     *     ProductCode?: string|null,
     *     ProductName?: string|null,
     *     Accounts?: list<RevenueShareProductAccountDetail>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
