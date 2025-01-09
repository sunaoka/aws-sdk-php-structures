<?php

namespace Sunaoka\Aws\Structures\Backup\ListCopyJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $ByResourceArn
 * @property 'CREATED'|'RUNNING'|'COMPLETED'|'FAILED'|'PARTIAL' $ByState
 * @property \Aws\Api\DateTimeResult $ByCreatedBefore
 * @property \Aws\Api\DateTimeResult $ByCreatedAfter
 * @property string $ByResourceType
 * @property string $ByDestinationVaultArn
 * @property string $ByAccountId
 * @property \Aws\Api\DateTimeResult $ByCompleteBefore
 * @property \Aws\Api\DateTimeResult $ByCompleteAfter
 * @property string $ByParentJobId
 * @property string $ByMessageCategory
 */
class ListCopyJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ByResourceArn?: string,
     *     ByState?: 'CREATED'|'RUNNING'|'COMPLETED'|'FAILED'|'PARTIAL',
     *     ByCreatedBefore?: \Aws\Api\DateTimeResult,
     *     ByCreatedAfter?: \Aws\Api\DateTimeResult,
     *     ByResourceType?: string,
     *     ByDestinationVaultArn?: string,
     *     ByAccountId?: string,
     *     ByCompleteBefore?: \Aws\Api\DateTimeResult,
     *     ByCompleteAfter?: \Aws\Api\DateTimeResult,
     *     ByParentJobId?: string,
     *     ByMessageCategory?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
