<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONED'|'PAY_PER_REQUEST'|null $BillingMode
 * @property \Aws\Api\DateTimeResult|null $LastUpdateToPayPerRequestDateTime
 */
class BillingModeSummary extends Shape
{
    /**
     * @param array{
     *     BillingMode?: 'PROVISIONED'|'PAY_PER_REQUEST'|null,
     *     LastUpdateToPayPerRequestDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
