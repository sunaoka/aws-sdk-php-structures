<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\UpdateMarketplaceRevenueShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductId
 * @property list<RevenueShareProductAccountEntry>|null $Accounts
 */
class MarketplaceRevenueShareProductEntry extends Shape
{
    /**
     * @param array{
     *     ProductId: string,
     *     Accounts?: list<RevenueShareProductAccountEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
