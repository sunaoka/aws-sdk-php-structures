<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'High'|'Medium'|'Low' $EngagementScore
 * @property string $NextBestActions
 */
class AwsOpportunityInsights extends Shape
{
    /**
     * @param array{
     *     EngagementScore?: 'High'|'Medium'|'Low',
     *     NextBestActions?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
