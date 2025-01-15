<?php

namespace Sunaoka\Aws\Structures\Sqs\ListDeadLetterSourceQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class ListDeadLetterSourceQueuesRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
