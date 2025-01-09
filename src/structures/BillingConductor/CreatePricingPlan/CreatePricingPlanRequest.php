<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreatePricingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Name
 * @property string $Description
 * @property list<string> $PricingRuleArns
 * @property array<string, string> $Tags
 */
class CreatePricingPlanRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Name: string,
     *     Description?: string,
     *     PricingRuleArns?: list<string>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
