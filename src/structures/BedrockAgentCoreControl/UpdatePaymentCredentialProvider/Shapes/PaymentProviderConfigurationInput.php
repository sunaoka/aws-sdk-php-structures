<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentCredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CoinbaseCdpConfigurationInput|null $coinbaseCdpConfiguration
 * @property StripePrivyConfigurationInput|null $stripePrivyConfiguration
 */
class PaymentProviderConfigurationInput extends Shape
{
    /**
     * @param array{
     *     coinbaseCdpConfiguration?: CoinbaseCdpConfigurationInput|null,
     *     stripePrivyConfiguration?: StripePrivyConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
