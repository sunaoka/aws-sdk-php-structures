<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property string $displayName
 * @property string $price
 */
class RegionalPrice extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     displayName: string,
     *     price: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
