<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateMarketplaceRevenueShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductId
 * @property string|null $ProductCode
 * @property string|null $ProductName
 * @property list<RevenueShareProductAccountSummary>|null $Accounts
 */
class MarketplaceRevenueShareProductSummary extends Shape
{
    /**
     * @param array{
     *     ProductId: string,
     *     ProductCode?: string|null,
     *     ProductName?: string|null,
     *     Accounts?: list<RevenueShareProductAccountSummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
