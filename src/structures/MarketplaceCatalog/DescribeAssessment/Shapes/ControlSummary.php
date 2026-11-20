<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListingRecommendations|null $ListingRecommendations
 */
class ControlSummary extends Shape
{
    /**
     * @param array{ListingRecommendations?: ListingRecommendations|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
