<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10000>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\QueueStreamFilter>|null $StreamFilter
 */
class ListQueuesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 10000>|null,
     *     NextToken?: string|null,
     *     StreamFilter?: list<Shapes\QueueStreamFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
