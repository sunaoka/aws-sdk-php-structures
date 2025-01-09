<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property list<string> $executionIds
 * @property string $jobName
 * @property int<1, 2000> $maxResults
 * @property string $nextToken
 * @property \Aws\Api\DateTimeResult $startedAfter
 * @property \Aws\Api\DateTimeResult $startedBefore
 * @property 'Submitting'|'Holding'|'Dispatching'|'Running'|'Cancelling'|'Cancelled'|'Succeeded'|'Failed'|'Purged'|'Succeeded With Warning' $status
 */
class ListBatchJobExecutionsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     executionIds?: list<string>,
     *     jobName?: string,
     *     maxResults?: int<1, 2000>,
     *     nextToken?: string,
     *     startedAfter?: \Aws\Api\DateTimeResult,
     *     startedBefore?: \Aws\Api\DateTimeResult,
     *     status?: 'Submitting'|'Holding'|'Dispatching'|'Running'|'Cancelling'|'Cancelled'|'Succeeded'|'Failed'|'Purged'|'Succeeded With Warning'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
