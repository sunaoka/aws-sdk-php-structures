<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property Shapes\UserSearchFilter|null $SearchFilter
 * @property Shapes\UserSearchCriteria|null $SearchCriteria
 */
class SearchUsersRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     SearchFilter?: Shapes\UserSearchFilter|null,
     *     SearchCriteria?: Shapes\UserSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
