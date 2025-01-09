<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterSchedulerConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property string $NameContains
 * @property string $ClusterArn
 * @property 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted' $Status
 * @property 'Name'|'CreationTime'|'Status' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListClusterSchedulerConfigsRequest extends Request
{
    /**
     * @param array{
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     NameContains?: string,
     *     ClusterArn?: string,
     *     Status?: 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted',
     *     SortBy?: 'Name'|'CreationTime'|'Status',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
