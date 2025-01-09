<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobQueue
 * @property string $arrayJobId
 * @property string $multiNodeJobId
 * @property 'SUBMITTED'|'PENDING'|'RUNNABLE'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED' $jobStatus
 * @property int $maxResults
 * @property string $nextToken
 * @property list<Shapes\KeyValuesPair> $filters
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     jobQueue?: string,
     *     arrayJobId?: string,
     *     multiNodeJobId?: string,
     *     jobStatus?: 'SUBMITTED'|'PENDING'|'RUNNABLE'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED',
     *     maxResults?: int,
     *     nextToken?: string,
     *     filters?: list<Shapes\KeyValuesPair>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
