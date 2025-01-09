<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10000> $Limit
 * @property string $ExclusiveStartStreamName
 * @property string $NextToken
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 10000>,
     *     ExclusiveStartStreamName?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
