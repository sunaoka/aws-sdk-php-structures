<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentCredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CoinbaseCdpConfigurationOutput|null $coinbaseCdpConfiguration
 * @property StripePrivyConfigurationOutput|null $stripePrivyConfiguration
 */
class PaymentProviderConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     coinbaseCdpConfiguration?: CoinbaseCdpConfigurationOutput|null,
     *     stripePrivyConfiguration?: StripePrivyConfigurationOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
