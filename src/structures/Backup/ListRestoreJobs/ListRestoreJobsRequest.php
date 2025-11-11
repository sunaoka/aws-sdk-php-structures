<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $ByAccountId
 * @property string|null $ByResourceType
 * @property \Aws\Api\DateTimeResult|null $ByCreatedBefore
 * @property \Aws\Api\DateTimeResult|null $ByCreatedAfter
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'ABORTED'|'FAILED'|null $ByStatus
 * @property \Aws\Api\DateTimeResult|null $ByCompleteBefore
 * @property \Aws\Api\DateTimeResult|null $ByCompleteAfter
 * @property string|null $ByRestoreTestingPlanArn
 * @property string|null $ByParentJobId
 */
class ListRestoreJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     ByAccountId?: string|null,
     *     ByResourceType?: string|null,
     *     ByCreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     ByCreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     ByStatus?: 'PENDING'|'RUNNING'|'COMPLETED'|'ABORTED'|'FAILED'|null,
     *     ByCompleteBefore?: \Aws\Api\DateTimeResult|null,
     *     ByCompleteAfter?: \Aws\Api\DateTimeResult|null,
     *     ByRestoreTestingPlanArn?: string|null,
     *     ByParentJobId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
