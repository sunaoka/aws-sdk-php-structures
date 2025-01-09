<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListLongTermPricing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LongTermPricingId
 * @property \Aws\Api\DateTimeResult $LongTermPricingEndDate
 * @property \Aws\Api\DateTimeResult $LongTermPricingStartDate
 * @property 'OneYear'|'ThreeYear'|'OneMonth' $LongTermPricingType
 * @property string $CurrentActiveJob
 * @property string $ReplacementJob
 * @property bool $IsLongTermPricingAutoRenew
 * @property string $LongTermPricingStatus
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C' $SnowballType
 * @property list<string> $JobIds
 */
class LongTermPricingListEntry extends Shape
{
    /**
     * @param array{
     *     LongTermPricingId?: string,
     *     LongTermPricingEndDate?: \Aws\Api\DateTimeResult,
     *     LongTermPricingStartDate?: \Aws\Api\DateTimeResult,
     *     LongTermPricingType?: 'OneYear'|'ThreeYear'|'OneMonth',
     *     CurrentActiveJob?: string,
     *     ReplacementJob?: string,
     *     IsLongTermPricingAutoRenew?: bool,
     *     LongTermPricingStatus?: string,
     *     SnowballType?: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C',
     *     JobIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
