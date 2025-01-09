<?php

namespace Sunaoka\Aws\Structures\Sqs\ListQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueNamePrefix
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListQueuesRequest extends Request
{
    /**
     * @param array{
     *     QueueNamePrefix?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
