<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Arns
 */
class ListPricingRulesFilter extends Shape
{
    /**
     * @param array{Arns?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
