<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BillingPeriod
 * @property Shapes\ListPricingRulesFilter $Filters
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListPricingRulesRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string,
     *     Filters?: Shapes\ListPricingRulesFilter,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
