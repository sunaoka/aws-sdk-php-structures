<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListCallAnalyticsJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $Status
 * @property string $JobNameContains
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListCallAnalyticsJobsRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED',
     *     JobNameContains?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
