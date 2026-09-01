<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FixedPercentage|null $fixedPercentage
 * @property PercentageRange|null $percentageRange
 */
class PriceIncrease extends Shape
{
    /**
     * @param array{
     *     fixedPercentage?: FixedPercentage|null,
     *     percentageRange?: PercentageRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
