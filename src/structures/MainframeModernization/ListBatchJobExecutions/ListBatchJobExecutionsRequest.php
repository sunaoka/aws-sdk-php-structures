<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property list<string>|null $executionIds
 * @property string|null $jobName
 * @property int<1, 2000>|null $maxResults
 * @property string|null $nextToken
 * @property \Aws\Api\DateTimeResult|null $startedAfter
 * @property \Aws\Api\DateTimeResult|null $startedBefore
 * @property 'Submitting'|'Holding'|'Dispatching'|'Running'|'Cancelling'|'Cancelled'|'Succeeded'|'Failed'|'Purged'|'Succeeded With Warning'|null $status
 */
class ListBatchJobExecutionsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     executionIds?: list<string>|null,
     *     jobName?: string|null,
     *     maxResults?: int<1, 2000>|null,
     *     nextToken?: string|null,
     *     startedAfter?: \Aws\Api\DateTimeResult|null,
     *     startedBefore?: \Aws\Api\DateTimeResult|null,
     *     status?: 'Submitting'|'Holding'|'Dispatching'|'Running'|'Cancelling'|'Cancelled'|'Succeeded'|'Failed'|'Purged'|'Succeeded With Warning'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
