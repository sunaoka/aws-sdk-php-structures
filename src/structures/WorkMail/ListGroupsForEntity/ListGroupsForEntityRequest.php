<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroupsForEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $EntityId
 * @property Shapes\ListGroupsForEntityFilters|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListGroupsForEntityRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     EntityId: string,
     *     Filters?: Shapes\ListGroupsForEntityFilters|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
