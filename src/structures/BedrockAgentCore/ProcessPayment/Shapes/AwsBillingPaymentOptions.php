<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DpopJwk|null $dpopJwk
 */
class AwsBillingPaymentOptions extends Shape
{
    /**
     * @param array{dpopJwk?: DpopJwk|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
