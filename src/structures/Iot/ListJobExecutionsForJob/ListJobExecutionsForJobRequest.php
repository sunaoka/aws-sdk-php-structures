<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobExecutionsForJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED' $status
 * @property int<1, 250> $maxResults
 * @property string $nextToken
 */
class ListJobExecutionsForJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED',
     *     maxResults?: int<1, 250>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
