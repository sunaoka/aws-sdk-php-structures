<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelPackageGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property int $MaxResults
 * @property string $NameContains
 * @property string $NextToken
 * @property 'Name'|'CreationTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property 'SameAccount'|'CrossAccount' $CrossAccountFilterOption
 */
class ListModelPackageGroupsRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NameContains?: string,
     *     NextToken?: string,
     *     SortBy?: 'Name'|'CreationTime',
     *     SortOrder?: 'Ascending'|'Descending',
     *     CrossAccountFilterOption?: 'SameAccount'|'CrossAccount'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
