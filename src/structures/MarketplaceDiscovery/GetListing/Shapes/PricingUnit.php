<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USERS'|'HOSTS'|'BANDWIDTH'|'DATA'|'TIERS'|'REQUESTS'|'UNITS' $pricingUnitType
 * @property string $displayName
 */
class PricingUnit extends Shape
{
    /**
     * @param array{
     *     pricingUnitType: 'USERS'|'HOSTS'|'BANDWIDTH'|'DATA'|'TIERS'|'REQUESTS'|'UNITS',
     *     displayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
