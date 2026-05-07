<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $paymentInstrumentId
 * @property string $paymentManagerArn
 * @property string $paymentConnectorId
 * @property string $userId
 * @property 'EMBEDDED_CRYPTO_WALLET' $paymentInstrumentType
 * @property PaymentInstrumentDetails $paymentInstrumentDetails
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'INITIATED'|'ACTIVE'|'FAILED'|'DELETED' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class PaymentInstrument extends Shape
{
    /**
     * @param array{
     *     paymentInstrumentId: string,
     *     paymentManagerArn: string,
     *     paymentConnectorId: string,
     *     userId: string,
     *     paymentInstrumentType: 'EMBEDDED_CRYPTO_WALLET',
     *     paymentInstrumentDetails: PaymentInstrumentDetails,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     status: 'INITIATED'|'ACTIVE'|'FAILED'|'DELETED',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
