<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<Shapes\Sort>|null $SortCriteria
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class SearchContactsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     SortCriteria?: list<Shapes\Sort>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
