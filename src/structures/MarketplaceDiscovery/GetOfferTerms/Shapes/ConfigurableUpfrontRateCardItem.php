<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Selector $selector
 * @property Constraints $constraints
 * @property list<RateCardItem> $rateCard
 */
class ConfigurableUpfrontRateCardItem extends Shape
{
    /**
     * @param array{
     *     selector: Selector,
     *     constraints: Constraints,
     *     rateCard: list<RateCardItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
