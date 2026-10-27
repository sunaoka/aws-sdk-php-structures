<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Amount $amount
 */
class InvestmentRestriction extends Shape
{
    /**
     * @param array{amount: Amount} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
