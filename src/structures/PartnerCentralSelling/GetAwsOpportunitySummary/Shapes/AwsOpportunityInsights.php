<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'High'|'Medium'|'Low'|null $EngagementScore
 * @property string|null $NextBestActions
 */
class AwsOpportunityInsights extends Shape
{
    /**
     * @param array{
     *     EngagementScore?: 'High'|'Medium'|'Low'|null,
     *     NextBestActions?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
