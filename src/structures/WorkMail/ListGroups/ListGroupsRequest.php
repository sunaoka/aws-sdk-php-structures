<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property Shapes\ListGroupsFilters $Filters
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     Filters?: Shapes\ListGroupsFilters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
