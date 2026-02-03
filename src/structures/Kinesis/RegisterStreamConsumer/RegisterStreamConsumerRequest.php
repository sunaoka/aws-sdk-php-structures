<?php

namespace Sunaoka\Aws\Structures\Kinesis\RegisterStreamConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property string $ConsumerName
 * @property string|null $StreamId
 * @property array<string, string>|null $Tags
 */
class RegisterStreamConsumerRequest extends Request
{
    /**
     * @param array{
     *     StreamARN: string,
     *     ConsumerName: string,
     *     StreamId?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
