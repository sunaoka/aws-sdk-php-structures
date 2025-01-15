<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListLongTermPricing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LongTermPricingId
 * @property \Aws\Api\DateTimeResult|null $LongTermPricingEndDate
 * @property \Aws\Api\DateTimeResult|null $LongTermPricingStartDate
 * @property 'OneYear'|'ThreeYear'|'OneMonth'|null $LongTermPricingType
 * @property string|null $CurrentActiveJob
 * @property string|null $ReplacementJob
 * @property bool|null $IsLongTermPricingAutoRenew
 * @property string|null $LongTermPricingStatus
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C'|null $SnowballType
 * @property list<string>|null $JobIds
 */
class LongTermPricingListEntry extends Shape
{
    /**
     * @param array{
     *     LongTermPricingId?: string|null,
     *     LongTermPricingEndDate?: \Aws\Api\DateTimeResult|null,
     *     LongTermPricingStartDate?: \Aws\Api\DateTimeResult|null,
     *     LongTermPricingType?: 'OneYear'|'ThreeYear'|'OneMonth'|null,
     *     CurrentActiveJob?: string|null,
     *     ReplacementJob?: string|null,
     *     IsLongTermPricingAutoRenew?: bool|null,
     *     LongTermPricingStatus?: string|null,
     *     SnowballType?: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C'|null,
     *     JobIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
