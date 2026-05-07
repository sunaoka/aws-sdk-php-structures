<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListPaymentInstruments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $paymentInstrumentId
 * @property string $paymentManagerArn
 * @property string $paymentConnectorId
 * @property string $userId
 * @property 'EMBEDDED_CRYPTO_WALLET' $paymentInstrumentType
 * @property 'INITIATED'|'ACTIVE'|'FAILED'|'DELETED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class PaymentInstrumentSummary extends Shape
{
    /**
     * @param array{
     *     paymentInstrumentId: string,
     *     paymentManagerArn: string,
     *     paymentConnectorId: string,
     *     userId: string,
     *     paymentInstrumentType: 'EMBEDDED_CRYPTO_WALLET',
     *     status: 'INITIATED'|'ACTIVE'|'FAILED'|'DELETED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
