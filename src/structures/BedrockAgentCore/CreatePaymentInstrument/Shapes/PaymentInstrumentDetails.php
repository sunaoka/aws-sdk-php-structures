<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreatePaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmbeddedCryptoWallet|null $embeddedCryptoWallet
 */
class PaymentInstrumentDetails extends Shape
{
    /**
     * @param array{embeddedCryptoWallet?: EmbeddedCryptoWallet|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
