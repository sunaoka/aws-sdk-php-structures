<?php

namespace Sunaoka\Aws\Structures\Sqs\ListQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $QueueNamePrefix
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class ListQueuesRequest extends Request
{
    /**
     * @param array{
     *     QueueNamePrefix?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
