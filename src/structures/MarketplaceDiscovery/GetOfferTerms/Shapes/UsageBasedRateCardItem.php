<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RateCardItem> $rateCard
 */
class UsageBasedRateCardItem extends Shape
{
    /**
     * @param array{rateCard: list<RateCardItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
