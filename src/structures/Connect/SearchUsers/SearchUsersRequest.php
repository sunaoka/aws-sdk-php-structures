<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\UserSearchFilter $SearchFilter
 * @property Shapes\UserSearchCriteria $SearchCriteria
 */
class SearchUsersRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SearchFilter?: Shapes\UserSearchFilter,
     *     SearchCriteria?: Shapes\UserSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
