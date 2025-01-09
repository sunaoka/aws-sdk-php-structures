<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BillingPeriod
 * @property Shapes\ListPricingPlansFilter $Filters
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListPricingPlansRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string,
     *     Filters?: Shapes\ListPricingPlansFilter,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
