<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourcePaymentToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CoinbaseCdpTokenRequestInput|null $coinbaseCdpTokenRequest
 * @property StripePrivyTokenRequestInput|null $stripePrivyTokenRequest
 */
class PaymentTokenRequestInput extends Shape
{
    /**
     * @param array{
     *     coinbaseCdpTokenRequest?: CoinbaseCdpTokenRequestInput|null,
     *     stripePrivyTokenRequest?: StripePrivyTokenRequestInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
