<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListFeatureGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NameContains
 * @property 'Creating'|'Created'|'CreateFailed'|'Deleting'|'DeleteFailed' $FeatureGroupStatusEquals
 * @property 'Active'|'Blocked'|'Disabled' $OfflineStoreStatusEquals
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property 'Ascending'|'Descending' $SortOrder
 * @property 'Name'|'FeatureGroupStatus'|'OfflineStoreStatus'|'CreationTime' $SortBy
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListFeatureGroupsRequest extends Request
{
    /**
     * @param array{
     *     NameContains?: string,
     *     FeatureGroupStatusEquals?: 'Creating'|'Created'|'CreateFailed'|'Deleting'|'DeleteFailed',
     *     OfflineStoreStatusEquals?: 'Active'|'Blocked'|'Disabled',
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     SortOrder?: 'Ascending'|'Descending',
     *     SortBy?: 'Name'|'FeatureGroupStatus'|'OfflineStoreStatus'|'CreationTime',
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
