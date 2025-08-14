<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextBestActions
 * @property 'High'|'Medium'|'Low'|null $EngagementScore
 */
class AwsOpportunityInsights extends Shape
{
    /**
     * @param array{
     *     NextBestActions?: string|null,
     *     EngagementScore?: 'High'|'Medium'|'Low'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
