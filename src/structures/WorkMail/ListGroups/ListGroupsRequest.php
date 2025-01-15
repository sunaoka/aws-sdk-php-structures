<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\ListGroupsFilters|null $Filters
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Filters?: Shapes\ListGroupsFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
