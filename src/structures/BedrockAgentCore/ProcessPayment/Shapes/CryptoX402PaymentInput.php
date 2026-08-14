<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property PaymentDocument $payload
 * @property string|null $permit2AllowanceLimit
 */
class CryptoX402PaymentInput extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     payload: PaymentDocument,
     *     permit2AllowanceLimit?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
