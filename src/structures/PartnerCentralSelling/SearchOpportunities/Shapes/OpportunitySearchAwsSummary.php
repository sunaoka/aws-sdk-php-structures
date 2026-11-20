<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS Referral'|'Partner Referral'|null $Origin
 * @property string|null $CosellMotion
 * @property OpportunitySearchInsights|null $Insights
 */
class OpportunitySearchAwsSummary extends Shape
{
    /**
     * @param array{
     *     Origin?: 'AWS Referral'|'Partner Referral'|null,
     *     CosellMotion?: string|null,
     *     Insights?: OpportunitySearchInsights|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
