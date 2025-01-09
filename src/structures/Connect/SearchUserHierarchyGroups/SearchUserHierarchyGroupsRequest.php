<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUserHierarchyGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\UserHierarchyGroupSearchFilter $SearchFilter
 * @property Shapes\UserHierarchyGroupSearchCriteria $SearchCriteria
 */
class SearchUserHierarchyGroupsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SearchFilter?: Shapes\UserHierarchyGroupSearchFilter,
     *     SearchCriteria?: Shapes\UserHierarchyGroupSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
