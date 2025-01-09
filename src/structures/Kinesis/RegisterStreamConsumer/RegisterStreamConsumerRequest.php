<?php

namespace Sunaoka\Aws\Structures\Kinesis\RegisterStreamConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property string $ConsumerName
 */
class RegisterStreamConsumerRequest extends Request
{
    /**
     * @param array{
     *     StreamARN: string,
     *     ConsumerName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
