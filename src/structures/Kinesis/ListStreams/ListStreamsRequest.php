<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10000>|null $Limit
 * @property string|null $ExclusiveStartStreamName
 * @property string|null $NextToken
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 10000>|null,
     *     ExclusiveStartStreamName?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
