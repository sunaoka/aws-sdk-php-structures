<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'High'|'Medium'|'Low'|null $EngagementScore
 * @property OpportunitySearchOpportunityQuality|null $OpportunityQuality
 */
class OpportunitySearchInsights extends Shape
{
    /**
     * @param array{
     *     EngagementScore?: 'High'|'Medium'|'Low'|null,
     *     OpportunityQuality?: OpportunitySearchOpportunityQuality|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
