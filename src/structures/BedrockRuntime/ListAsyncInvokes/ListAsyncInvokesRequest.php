<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ListAsyncInvokes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $submitTimeAfter
 * @property \Aws\Api\DateTimeResult $submitTimeBefore
 * @property 'InProgress'|'Completed'|'Failed' $statusEquals
 * @property int $maxResults
 * @property string $nextToken
 * @property 'SubmissionTime' $sortBy
 * @property 'Ascending'|'Descending' $sortOrder
 */
class ListAsyncInvokesRequest extends Request
{
    /**
     * @param array{
     *     submitTimeAfter?: \Aws\Api\DateTimeResult,
     *     submitTimeBefore?: \Aws\Api\DateTimeResult,
     *     statusEquals?: 'InProgress'|'Completed'|'Failed',
     *     maxResults?: int,
     *     nextToken?: string,
     *     sortBy?: 'SubmissionTime',
     *     sortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
