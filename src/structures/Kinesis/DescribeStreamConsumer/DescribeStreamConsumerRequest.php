<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStreamConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property string $ConsumerName
 * @property string $ConsumerARN
 */
class DescribeStreamConsumerRequest extends Request
{
    /**
     * @param array{
     *     StreamARN?: string,
     *     ConsumerName?: string,
     *     ConsumerARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
