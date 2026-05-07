<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PaymentCredentialProviderConfiguration|null $coinbaseCDP
 * @property PaymentCredentialProviderConfiguration|null $stripePrivy
 */
class CredentialsProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     coinbaseCDP?: PaymentCredentialProviderConfiguration|null,
     *     stripePrivy?: PaymentCredentialProviderConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
