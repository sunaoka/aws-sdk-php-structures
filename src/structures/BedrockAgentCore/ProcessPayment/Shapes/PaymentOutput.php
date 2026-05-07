<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CryptoX402PaymentOutput|null $cryptoX402
 */
class PaymentOutput extends Shape
{
    /**
     * @param array{cryptoX402?: CryptoX402PaymentOutput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
