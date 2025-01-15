<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreatePricingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $Name
 * @property string|null $Description
 * @property list<string>|null $PricingRuleArns
 * @property array<string, string>|null $Tags
 */
class CreatePricingPlanRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Name: string,
     *     Description?: string|null,
     *     PricingRuleArns?: list<string>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
