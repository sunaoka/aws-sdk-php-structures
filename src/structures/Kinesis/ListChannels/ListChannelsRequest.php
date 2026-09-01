<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\StreamFilter>|null $StreamFilter
 * @property int<1, 10000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListChannelsRequest extends Request
{
    /**
     * @param array{
     *     StreamFilter?: list<Shapes\StreamFilter>|null,
     *     MaxResults?: int<1, 10000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
