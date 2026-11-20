<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchCustomerAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MarketplaceEngagementScore
 * @property string|null $SolutionCategory
 * @property string|null $SolutionScore
 */
class AwsEnrichmentInsightsSummary extends Shape
{
    /**
     * @param array{
     *     MarketplaceEngagementScore?: string|null,
     *     SolutionCategory?: string|null,
     *     SolutionScore?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
