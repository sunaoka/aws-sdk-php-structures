<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListJobRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 * @property \Aws\Api\DateTimeResult|null $createdAtAfter
 * @property \Aws\Api\DateTimeResult|null $createdAtBefore
 * @property list<'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED'>|null $states
 * @property 'BATCH'|'STREAMING'|null $mode
 */
class ListJobRunsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     createdAtAfter?: \Aws\Api\DateTimeResult|null,
     *     createdAtBefore?: \Aws\Api\DateTimeResult|null,
     *     states?: list<'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED'>|null,
     *     mode?: 'BATCH'|'STREAMING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
