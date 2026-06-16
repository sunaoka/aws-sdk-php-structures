<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MarketplaceEngagementScore
 * @property string|null $SolutionScore
 * @property string|null $SolutionCategory
 * @property string|null $SolutionSubCategory
 */
class ProspectingInsights extends Shape
{
    /**
     * @param array{
     *     MarketplaceEngagementScore?: string|null,
     *     SolutionScore?: string|null,
     *     SolutionCategory?: string|null,
     *     SolutionSubCategory?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
