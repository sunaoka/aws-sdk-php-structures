<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListJobRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $nextToken
 * @property int $maxResults
 * @property \Aws\Api\DateTimeResult $createdAtAfter
 * @property \Aws\Api\DateTimeResult $createdAtBefore
 * @property list<'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED'> $states
 * @property 'BATCH'|'STREAMING' $mode
 */
class ListJobRunsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     createdAtAfter?: \Aws\Api\DateTimeResult,
     *     createdAtBefore?: \Aws\Api\DateTimeResult,
     *     states?: list<'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED'>,
     *     mode?: 'BATCH'|'STREAMING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
