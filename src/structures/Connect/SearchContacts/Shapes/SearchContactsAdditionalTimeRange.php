<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SearchContactsAdditionalTimeRangeCriteria> $Criteria
 * @property 'MATCH_ALL'|'MATCH_ANY'|'MATCH_EXACT'|'MATCH_NONE' $MatchType
 */
class SearchContactsAdditionalTimeRange extends Shape
{
    /**
     * @param array{
     *     Criteria: list<SearchContactsAdditionalTimeRangeCriteria>,
     *     MatchType: 'MATCH_ALL'|'MATCH_ANY'|'MATCH_EXACT'|'MATCH_NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
