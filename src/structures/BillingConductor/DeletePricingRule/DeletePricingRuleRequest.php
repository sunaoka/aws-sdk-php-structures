<?php

namespace Sunaoka\Aws\Structures\BillingConductor\DeletePricingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeletePricingRuleRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
