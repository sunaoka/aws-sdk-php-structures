<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BillingPeriod
 * @property Shapes\ListPricingPlansFilter|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPricingPlansRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string|null,
     *     Filters?: Shapes\ListPricingPlansFilter|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
