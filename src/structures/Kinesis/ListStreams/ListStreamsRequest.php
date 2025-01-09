<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Limit
 * @property string $ExclusiveStartStreamName
 * @property string $NextToken
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int,
     *     ExclusiveStartStreamName?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
