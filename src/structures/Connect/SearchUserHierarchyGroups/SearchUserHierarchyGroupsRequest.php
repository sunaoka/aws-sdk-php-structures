<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUserHierarchyGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\UserHierarchyGroupSearchFilter|null $SearchFilter
 * @property Shapes\UserHierarchyGroupSearchCriteria|null $SearchCriteria
 */
class SearchUserHierarchyGroupsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchFilter?: Shapes\UserHierarchyGroupSearchFilter|null,
     *     SearchCriteria?: Shapes\UserHierarchyGroupSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
