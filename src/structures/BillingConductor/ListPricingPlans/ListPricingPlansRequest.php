<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BillingPeriod
 * @property Shapes\ListPricingPlansFilter $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListPricingPlansRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string,
     *     Filters?: Shapes\ListPricingPlansFilter,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
