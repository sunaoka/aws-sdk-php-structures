<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property string $ByAccountId
 * @property string $ByResourceType
 * @property \Aws\Api\DateTimeResult $ByCreatedBefore
 * @property \Aws\Api\DateTimeResult $ByCreatedAfter
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'ABORTED'|'FAILED' $ByStatus
 * @property \Aws\Api\DateTimeResult $ByCompleteBefore
 * @property \Aws\Api\DateTimeResult $ByCompleteAfter
 * @property string $ByRestoreTestingPlanArn
 */
class ListRestoreJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     ByAccountId?: string,
     *     ByResourceType?: string,
     *     ByCreatedBefore?: \Aws\Api\DateTimeResult,
     *     ByCreatedAfter?: \Aws\Api\DateTimeResult,
     *     ByStatus?: 'PENDING'|'RUNNING'|'COMPLETED'|'ABORTED'|'FAILED',
     *     ByCompleteBefore?: \Aws\Api\DateTimeResult,
     *     ByCompleteAfter?: \Aws\Api\DateTimeResult,
     *     ByRestoreTestingPlanArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
