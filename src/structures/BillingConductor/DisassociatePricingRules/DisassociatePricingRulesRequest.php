<?php

namespace Sunaoka\Aws\Structures\BillingConductor\DisassociatePricingRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property list<string> $PricingRuleArns
 */
class DisassociatePricingRulesRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     PricingRuleArns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
