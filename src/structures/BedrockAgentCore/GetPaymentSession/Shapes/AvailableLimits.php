<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Amount|null $availableSpendAmount
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class AvailableLimits extends Shape
{
    /**
     * @param array{
     *     availableSpendAmount?: Amount|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
