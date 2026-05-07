<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $paymentSessionId
 * @property string $paymentManagerArn
 * @property SessionLimits|null $limits
 * @property string $userId
 * @property int $expiryTimeInMinutes
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property AvailableLimits|null $availableLimits
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class PaymentSession extends Shape
{
    /**
     * @param array{
     *     paymentSessionId: string,
     *     paymentManagerArn: string,
     *     limits?: SessionLimits|null,
     *     userId: string,
     *     expiryTimeInMinutes: int,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     availableLimits?: AvailableLimits|null,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
