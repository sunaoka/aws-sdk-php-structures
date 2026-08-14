<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property string $selectedPaymentId
 * @property string $paymentCredential
 */
class MppPaymentOutput extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     selectedPaymentId: string,
     *     paymentCredential: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
