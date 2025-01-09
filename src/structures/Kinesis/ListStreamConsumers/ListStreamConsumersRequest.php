<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListStreamConsumers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property string $NextToken
 * @property int<1, 10000> $MaxResults
 * @property \Aws\Api\DateTimeResult $StreamCreationTimestamp
 */
class ListStreamConsumersRequest extends Request
{
    /**
     * @param array{
     *     StreamARN: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 10000>,
     *     StreamCreationTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
