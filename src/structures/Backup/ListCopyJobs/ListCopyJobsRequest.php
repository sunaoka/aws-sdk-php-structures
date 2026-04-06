<?php

namespace Sunaoka\Aws\Structures\Backup\ListCopyJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $ByResourceArn
 * @property 'CREATED'|'RUNNING'|'COMPLETED'|'FAILED'|'PARTIAL'|null $ByState
 * @property \Aws\Api\DateTimeResult|null $ByCreatedBefore
 * @property \Aws\Api\DateTimeResult|null $ByCreatedAfter
 * @property string|null $ByResourceType
 * @property string|null $ByDestinationVaultArn
 * @property string|null $ByAccountId
 * @property \Aws\Api\DateTimeResult|null $ByCompleteBefore
 * @property \Aws\Api\DateTimeResult|null $ByCompleteAfter
 * @property string|null $ByParentJobId
 * @property string|null $ByMessageCategory
 * @property string|null $BySourceRecoveryPointArn
 */
class ListCopyJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     ByResourceArn?: string|null,
     *     ByState?: 'CREATED'|'RUNNING'|'COMPLETED'|'FAILED'|'PARTIAL'|null,
     *     ByCreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     ByCreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     ByResourceType?: string|null,
     *     ByDestinationVaultArn?: string|null,
     *     ByAccountId?: string|null,
     *     ByCompleteBefore?: \Aws\Api\DateTimeResult|null,
     *     ByCompleteAfter?: \Aws\Api\DateTimeResult|null,
     *     ByParentJobId?: string|null,
     *     ByMessageCategory?: string|null,
     *     BySourceRecoveryPointArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
