<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $userId
 * @property string|null $agentName
 * @property string $paymentManagerArn
 * @property string $paymentSessionId
 * @property string $paymentInstrumentId
 * @property 'CRYPTO_X402' $paymentType
 * @property Shapes\PaymentInput $paymentInput
 * @property string|null $clientToken
 */
class ProcessPaymentRequest extends Request
{
    /**
     * @param array{
     *     userId?: string|null,
     *     agentName?: string|null,
     *     paymentManagerArn: string,
     *     paymentSessionId: string,
     *     paymentInstrumentId: string,
     *     paymentType: 'CRYPTO_X402',
     *     paymentInput: Shapes\PaymentInput,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
