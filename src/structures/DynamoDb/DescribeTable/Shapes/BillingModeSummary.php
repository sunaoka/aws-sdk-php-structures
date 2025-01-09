<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONED'|'PAY_PER_REQUEST' $BillingMode
 * @property \Aws\Api\DateTimeResult $LastUpdateToPayPerRequestDateTime
 */
class BillingModeSummary extends Shape
{
    /**
     * @param array{
     *     BillingMode?: 'PROVISIONED'|'PAY_PER_REQUEST',
     *     LastUpdateToPayPerRequestDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
