<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PaymentCredentialProviderConfiguration|null $coinbaseCDP
 * @property PaymentCredentialProviderConfiguration|null $stripePrivy
 * @property AwsBillingConnectorConfiguration|null $awsBilling
 */
class CredentialsProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     coinbaseCDP?: PaymentCredentialProviderConfiguration|null,
     *     stripePrivy?: PaymentCredentialProviderConfiguration|null,
     *     awsBilling?: AwsBillingConnectorConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
