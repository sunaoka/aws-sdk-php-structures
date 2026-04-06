<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchSkillGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property list<Shapes\Sort>|null $SortCriteria
 */
class SearchSkillGroupsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     SortCriteria?: list<Shapes\Sort>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
