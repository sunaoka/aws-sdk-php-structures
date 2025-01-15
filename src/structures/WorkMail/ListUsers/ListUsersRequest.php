<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\ListUsersFilters|null $Filters
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Filters?: Shapes\ListUsersFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
