<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $jobQueues
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeJobQueuesRequest extends Request
{
    /**
     * @param array{
     *     jobQueues?: list<string>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
