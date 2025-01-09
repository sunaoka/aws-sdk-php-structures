<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListStreamConsumers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConsumerName
 * @property string $ConsumerARN
 * @property 'CREATING'|'DELETING'|'ACTIVE' $ConsumerStatus
 * @property \Aws\Api\DateTimeResult $ConsumerCreationTimestamp
 */
class Consumer extends Shape
{
    /**
     * @param array{
     *     ConsumerName: string,
     *     ConsumerARN: string,
     *     ConsumerStatus: 'CREATING'|'DELETING'|'ACTIVE',
     *     ConsumerCreationTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
