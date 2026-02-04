<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListStreamConsumers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property string|null $NextToken
 * @property int<1, 10000>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $StreamCreationTimestamp
 * @property string|null $StreamId
 */
class ListStreamConsumersRequest extends Request
{
    /**
     * @param array{
     *     StreamARN: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 10000>|null,
     *     StreamCreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
