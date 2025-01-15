<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListFeatureGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NameContains
 * @property 'Creating'|'Created'|'CreateFailed'|'Deleting'|'DeleteFailed'|null $FeatureGroupStatusEquals
 * @property 'Active'|'Blocked'|'Disabled'|null $OfflineStoreStatusEquals
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property 'Name'|'FeatureGroupStatus'|'OfflineStoreStatus'|'CreationTime'|null $SortBy
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListFeatureGroupsRequest extends Request
{
    /**
     * @param array{
     *     NameContains?: string|null,
     *     FeatureGroupStatusEquals?: 'Creating'|'Created'|'CreateFailed'|'Deleting'|'DeleteFailed'|null,
     *     OfflineStoreStatusEquals?: 'Active'|'Blocked'|'Disabled'|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     SortBy?: 'Name'|'FeatureGroupStatus'|'OfflineStoreStatus'|'CreationTime'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
