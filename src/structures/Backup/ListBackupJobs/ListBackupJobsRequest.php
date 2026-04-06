<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $ByResourceArn
 * @property 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL'|null $ByState
 * @property string|null $ByBackupVaultName
 * @property \Aws\Api\DateTimeResult|null $ByCreatedBefore
 * @property \Aws\Api\DateTimeResult|null $ByCreatedAfter
 * @property string|null $ByResourceType
 * @property string|null $ByAccountId
 * @property \Aws\Api\DateTimeResult|null $ByCompleteAfter
 * @property \Aws\Api\DateTimeResult|null $ByCompleteBefore
 * @property string|null $ByParentJobId
 * @property string|null $ByMessageCategory
 */
class ListBackupJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     ByResourceArn?: string|null,
     *     ByState?: 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL'|null,
     *     ByBackupVaultName?: string|null,
     *     ByCreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     ByCreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     ByResourceType?: string|null,
     *     ByAccountId?: string|null,
     *     ByCompleteAfter?: \Aws\Api\DateTimeResult|null,
     *     ByCompleteBefore?: \Aws\Api\DateTimeResult|null,
     *     ByParentJobId?: string|null,
     *     ByMessageCategory?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
