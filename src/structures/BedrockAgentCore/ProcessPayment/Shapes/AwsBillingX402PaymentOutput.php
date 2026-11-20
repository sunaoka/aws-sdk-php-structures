<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property string $paymentToken
 */
class AwsBillingX402PaymentOutput extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     paymentToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
