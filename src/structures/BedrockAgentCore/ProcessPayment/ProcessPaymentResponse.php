<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $processPaymentId
 * @property string $paymentManagerArn
 * @property string $paymentSessionId
 * @property string $paymentInstrumentId
 * @property 'CRYPTO_X402' $paymentType
 * @property 'PROOF_GENERATED' $status
 * @property Shapes\PaymentOutput $paymentOutput
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ProcessPaymentResponse extends Response
{
}
