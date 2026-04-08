<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USAGE'|'CONTRACT'|'BYOL'|'FREE' $pricingModelType
 * @property string $displayName
 */
class PricingModel extends Shape
{
    /**
     * @param array{
     *     pricingModelType: 'USAGE'|'CONTRACT'|'BYOL'|'FREE',
     *     displayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
