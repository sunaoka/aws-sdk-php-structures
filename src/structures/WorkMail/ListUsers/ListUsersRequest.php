<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property Shapes\ListUsersFilters $Filters
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     Filters?: Shapes\ListUsersFilters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
