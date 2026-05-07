<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Amount $maxSpendAmount
 */
class SessionLimits extends Shape
{
    /**
     * @param array{maxSpendAmount: Amount} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
