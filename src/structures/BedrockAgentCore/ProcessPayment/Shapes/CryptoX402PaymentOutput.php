<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property PaymentDocument $payload
 */
class CryptoX402PaymentOutput extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     payload: PaymentDocument
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
