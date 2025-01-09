<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingPlansAssociatedWithPricingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BillingPeriod
 * @property string $PricingRuleArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListPricingPlansAssociatedWithPricingRuleRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string,
     *     PricingRuleArn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
