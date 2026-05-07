<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListPaymentSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $paymentSessionId
 * @property string $paymentManagerArn
 * @property string $userId
 * @property int $expiryTimeInMinutes
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class PaymentSessionSummary extends Shape
{
    /**
     * @param array{
     *     paymentSessionId: string,
     *     paymentManagerArn: string,
     *     userId: string,
     *     expiryTimeInMinutes: int,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
