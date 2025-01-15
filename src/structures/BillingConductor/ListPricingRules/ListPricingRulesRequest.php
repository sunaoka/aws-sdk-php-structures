<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BillingPeriod
 * @property Shapes\ListPricingRulesFilter|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPricingRulesRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string|null,
     *     Filters?: Shapes\ListPricingRulesFilter|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
