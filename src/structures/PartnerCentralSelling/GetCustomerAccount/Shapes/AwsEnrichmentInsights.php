<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MarketplaceEngagementScore
 * @property string|null $SolutionCategory
 * @property string|null $SolutionScore
 * @property string|null $SolutionSubCategory
 */
class AwsEnrichmentInsights extends Shape
{
    /**
     * @param array{
     *     MarketplaceEngagementScore?: string|null,
     *     SolutionCategory?: string|null,
     *     SolutionScore?: string|null,
     *     SolutionSubCategory?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
