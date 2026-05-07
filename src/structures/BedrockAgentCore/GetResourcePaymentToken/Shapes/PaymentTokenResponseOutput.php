<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourcePaymentToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CoinbaseCdpTokenResponseOutput|null $coinbaseCdpTokenResponse
 * @property StripePrivyTokenResponseOutput|null $stripePrivyTokenResponse
 */
class PaymentTokenResponseOutput extends Shape
{
    /**
     * @param array{
     *     coinbaseCdpTokenResponse?: CoinbaseCdpTokenResponseOutput|null,
     *     stripePrivyTokenResponse?: StripePrivyTokenResponseOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
