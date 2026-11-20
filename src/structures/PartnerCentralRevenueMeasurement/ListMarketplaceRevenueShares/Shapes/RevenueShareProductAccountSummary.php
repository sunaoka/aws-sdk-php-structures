<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListMarketplaceRevenueShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEPLOYMENT'|'ORGANIZATION' $AccountType
 * @property int<0, max> $Count
 */
class RevenueShareProductAccountSummary extends Shape
{
    /**
     * @param array{
     *     AccountType: 'DEPLOYMENT'|'ORGANIZATION',
     *     Count: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
