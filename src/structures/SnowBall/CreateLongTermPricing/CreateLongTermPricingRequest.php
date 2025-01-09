<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateLongTermPricing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'OneYear'|'ThreeYear'|'OneMonth' $LongTermPricingType
 * @property bool $IsLongTermPricingAutoRenew
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C' $SnowballType
 */
class CreateLongTermPricingRequest extends Request
{
    /**
     * @param array{
     *     LongTermPricingType: 'OneYear'|'ThreeYear'|'OneMonth',
     *     IsLongTermPricingAutoRenew?: bool,
     *     SnowballType: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
