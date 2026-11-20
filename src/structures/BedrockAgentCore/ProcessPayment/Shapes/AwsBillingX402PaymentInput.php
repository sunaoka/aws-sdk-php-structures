<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property PaymentDocument $payload
 * @property AwsBillingPaymentOptions|null $options
 */
class AwsBillingX402PaymentInput extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     payload: PaymentDocument,
     *     options?: AwsBillingPaymentOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
