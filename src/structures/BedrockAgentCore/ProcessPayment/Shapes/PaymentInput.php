<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CryptoX402PaymentInput|null $cryptoX402
 */
class PaymentInput extends Shape
{
    /**
     * @param array{cryptoX402?: CryptoX402PaymentInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
