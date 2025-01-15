<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobExecutionsForJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null $status
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 */
class ListJobExecutionsForJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
