<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingPlansAssociatedWithPricingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BillingPeriod
 * @property string $PricingRuleArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListPricingPlansAssociatedWithPricingRuleRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string,
     *     PricingRuleArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
