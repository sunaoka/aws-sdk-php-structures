<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStreamConsumer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConsumerName
 * @property string $ConsumerARN
 * @property 'CREATING'|'DELETING'|'ACTIVE' $ConsumerStatus
 * @property \Aws\Api\DateTimeResult $ConsumerCreationTimestamp
 * @property string $StreamARN
 */
class ConsumerDescription extends Shape
{
    /**
     * @param array{
     *     ConsumerName: string,
     *     ConsumerARN: string,
     *     ConsumerStatus: 'CREATING'|'DELETING'|'ACTIVE',
     *     ConsumerCreationTimestamp: \Aws\Api\DateTimeResult,
     *     StreamARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
