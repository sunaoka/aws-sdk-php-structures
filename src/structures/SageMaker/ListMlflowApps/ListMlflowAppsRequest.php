<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMlflowApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Deleted'|null $Status
 * @property string|null $MlflowVersion
 * @property string|null $DefaultForDomainId
 * @property 'ENABLED'|'DISABLED'|null $AccountDefaultStatus
 * @property 'Name'|'CreationTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListMlflowAppsRequest extends Request
{
    /**
     * @param array{
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Deleted'|null,
     *     MlflowVersion?: string|null,
     *     DefaultForDomainId?: string|null,
     *     AccountDefaultStatus?: 'ENABLED'|'DISABLED'|null,
     *     SortBy?: 'Name'|'CreationTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
