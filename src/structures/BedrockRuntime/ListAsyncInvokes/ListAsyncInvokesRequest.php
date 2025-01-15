<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ListAsyncInvokes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $submitTimeAfter
 * @property \Aws\Api\DateTimeResult|null $submitTimeBefore
 * @property 'InProgress'|'Completed'|'Failed'|null $statusEquals
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'SubmissionTime'|null $sortBy
 * @property 'Ascending'|'Descending'|null $sortOrder
 */
class ListAsyncInvokesRequest extends Request
{
    /**
     * @param array{
     *     submitTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     submitTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     statusEquals?: 'InProgress'|'Completed'|'Failed'|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     sortBy?: 'SubmissionTime'|null,
     *     sortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
