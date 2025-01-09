<?php

namespace Sunaoka\Aws\Structures\Sqs\ListDeadLetterSourceQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListDeadLetterSourceQueuesRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
