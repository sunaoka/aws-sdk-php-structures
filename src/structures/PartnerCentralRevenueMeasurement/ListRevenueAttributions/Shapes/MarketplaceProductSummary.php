<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListRevenueAttributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProductId
 * @property string|null $ProductCode
 * @property string|null $ProductName
 */
class MarketplaceProductSummary extends Shape
{
    /**
     * @param array{
     *     ProductId?: string|null,
     *     ProductCode?: string|null,
     *     ProductName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
