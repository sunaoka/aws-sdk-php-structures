<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextBestActions
 * @property 'High'|'Medium'|'Low'|null $EngagementScore
 * @property AwsProductsSpendInsightsBySource|null $AwsProductsSpendInsightsBySource
 */
class AwsOpportunityInsights extends Shape
{
    /**
     * @param array{
     *     NextBestActions?: string|null,
     *     EngagementScore?: 'High'|'Medium'|'Low'|null,
     *     AwsProductsSpendInsightsBySource?: AwsProductsSpendInsightsBySource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
