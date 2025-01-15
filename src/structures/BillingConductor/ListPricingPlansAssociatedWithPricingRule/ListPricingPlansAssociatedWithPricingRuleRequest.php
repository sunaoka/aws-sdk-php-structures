<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingPlansAssociatedWithPricingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BillingPeriod
 * @property string $PricingRuleArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPricingPlansAssociatedWithPricingRuleRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string|null,
     *     PricingRuleArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
