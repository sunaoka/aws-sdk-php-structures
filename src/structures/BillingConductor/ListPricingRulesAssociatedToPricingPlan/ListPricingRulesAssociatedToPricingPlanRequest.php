<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingRulesAssociatedToPricingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BillingPeriod
 * @property string $PricingPlanArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPricingRulesAssociatedToPricingPlanRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string|null,
     *     PricingPlanArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
