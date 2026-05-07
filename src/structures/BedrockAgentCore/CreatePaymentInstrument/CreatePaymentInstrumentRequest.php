<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreatePaymentInstrument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $userId
 * @property string|null $agentName
 * @property string $paymentManagerArn
 * @property string $paymentConnectorId
 * @property 'EMBEDDED_CRYPTO_WALLET' $paymentInstrumentType
 * @property Shapes\PaymentInstrumentDetails $paymentInstrumentDetails
 * @property string|null $clientToken
 */
class CreatePaymentInstrumentRequest extends Request
{
    /**
     * @param array{
     *     userId?: string|null,
     *     agentName?: string|null,
     *     paymentManagerArn: string,
     *     paymentConnectorId: string,
     *     paymentInstrumentType: 'EMBEDDED_CRYPTO_WALLET',
     *     paymentInstrumentDetails: Shapes\PaymentInstrumentDetails,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
