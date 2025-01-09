<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $jobQueues
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeJobQueuesRequest extends Request
{
    /**
     * @param array{
     *     jobQueues?: list<string>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
