<?php

namespace Sunaoka\Aws\Structures\Kinesis\DeregisterStreamConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property string $ConsumerName
 * @property string $ConsumerARN
 */
class DeregisterStreamConsumerRequest extends Request
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
