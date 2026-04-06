<?php

namespace Sunaoka\Aws\Structures\Kinesis\DeregisterStreamConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamARN
 * @property string|null $ConsumerName
 * @property string|null $ConsumerARN
 */
class DeregisterStreamConsumerRequest extends Request
{
    /**
     * @param array{
     *     StreamARN?: string|null,
     *     ConsumerName?: string|null,
     *     ConsumerARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
