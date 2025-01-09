<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $ByResourceArn
 * @property 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL' $ByState
 * @property string $ByBackupVaultName
 * @property \Aws\Api\DateTimeResult $ByCreatedBefore
 * @property \Aws\Api\DateTimeResult $ByCreatedAfter
 * @property string $ByResourceType
 * @property string $ByAccountId
 * @property \Aws\Api\DateTimeResult $ByCompleteAfter
 * @property \Aws\Api\DateTimeResult $ByCompleteBefore
 * @property string $ByParentJobId
 * @property string $ByMessageCategory
 */
class ListBackupJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ByResourceArn?: string,
     *     ByState?: 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL',
     *     ByBackupVaultName?: string,
     *     ByCreatedBefore?: \Aws\Api\DateTimeResult,
     *     ByCreatedAfter?: \Aws\Api\DateTimeResult,
     *     ByResourceType?: string,
     *     ByAccountId?: string,
     *     ByCompleteAfter?: \Aws\Api\DateTimeResult,
     *     ByCompleteBefore?: \Aws\Api\DateTimeResult,
     *     ByParentJobId?: string,
     *     ByMessageCategory?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
