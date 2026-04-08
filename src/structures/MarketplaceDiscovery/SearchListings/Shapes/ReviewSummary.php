<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReviewSourceSummary> $reviewSourceSummaries
 */
class ReviewSummary extends Shape
{
    /**
     * @param array{reviewSourceSummaries: list<ReviewSourceSummary>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
