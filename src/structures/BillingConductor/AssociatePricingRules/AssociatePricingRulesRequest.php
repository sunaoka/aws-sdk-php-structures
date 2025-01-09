<?php

namespace Sunaoka\Aws\Structures\BillingConductor\AssociatePricingRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property list<string> $PricingRuleArns
 */
class AssociatePricingRulesRequest extends Request
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
