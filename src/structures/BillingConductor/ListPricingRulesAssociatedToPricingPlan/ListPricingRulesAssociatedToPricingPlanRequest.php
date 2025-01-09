<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingRulesAssociatedToPricingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BillingPeriod
 * @property string $PricingPlanArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListPricingRulesAssociatedToPricingPlanRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string,
     *     PricingPlanArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
