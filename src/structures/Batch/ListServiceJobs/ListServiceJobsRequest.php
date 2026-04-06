<?php

namespace Sunaoka\Aws\Structures\Batch\ListServiceJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $jobQueue
 * @property 'SUBMITTED'|'PENDING'|'RUNNABLE'|'SCHEDULED'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|null $jobStatus
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\KeyValuesPair>|null $filters
 */
class ListServiceJobsRequest extends Request
{
    /**
     * @param array{
     *     jobQueue?: string|null,
     *     jobStatus?: 'SUBMITTED'|'PENDING'|'RUNNABLE'|'SCHEDULED'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     filters?: list<Shapes\KeyValuesPair>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
