<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourcePaymentToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadIdentityToken
 * @property string $resourceCredentialProviderName
 * @property Shapes\PaymentTokenRequestInput $paymentTokenRequest
 */
class GetResourcePaymentTokenRequest extends Request
{
    /**
     * @param array{
     *     workloadIdentityToken: string,
     *     resourceCredentialProviderName: string,
     *     paymentTokenRequest: Shapes\PaymentTokenRequestInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
