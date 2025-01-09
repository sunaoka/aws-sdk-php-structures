<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\ListUsersFilters $Filters
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filters?: Shapes\ListUsersFilters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
