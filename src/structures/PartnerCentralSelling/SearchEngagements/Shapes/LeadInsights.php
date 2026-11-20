<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LeadReadinessScore
 * @property ChannelRecommendation|null $ChannelRecommendation
 */
class LeadInsights extends Shape
{
    /**
     * @param array{
     *     LeadReadinessScore?: string|null,
     *     ChannelRecommendation?: ChannelRecommendation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
