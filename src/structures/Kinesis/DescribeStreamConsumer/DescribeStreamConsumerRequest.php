<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStreamConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamARN
 * @property string|null $ConsumerName
 * @property string|null $ConsumerARN
 * @property string|null $StreamId
 */
class DescribeStreamConsumerRequest extends Request
{
    /**
     * @param array{
     *     StreamARN?: string|null,
     *     ConsumerName?: string|null,
     *     ConsumerARN?: string|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
