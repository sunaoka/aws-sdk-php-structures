<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $percentageValue
 */
class FixedPercentage extends Shape
{
    /**
     * @param array{percentageValue: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
