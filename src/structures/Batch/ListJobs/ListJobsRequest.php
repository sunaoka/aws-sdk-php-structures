<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $jobQueue
 * @property string|null $arrayJobId
 * @property string|null $multiNodeJobId
 * @property 'SUBMITTED'|'PENDING'|'RUNNABLE'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|null $jobStatus
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\KeyValuesPair>|null $filters
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     jobQueue?: string|null,
     *     arrayJobId?: string|null,
     *     multiNodeJobId?: string|null,
     *     jobStatus?: 'SUBMITTED'|'PENDING'|'RUNNABLE'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|null,
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
