<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroupsForEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $EntityId
 * @property Shapes\ListGroupsForEntityFilters $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListGroupsForEntityRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     EntityId: string,
     *     Filters?: Shapes\ListGroupsForEntityFilters,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
