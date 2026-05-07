<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPaymentConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $credentialProviderArn
 */
class PaymentCredentialProviderConfiguration extends Shape
{
    /**
     * @param array{credentialProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
