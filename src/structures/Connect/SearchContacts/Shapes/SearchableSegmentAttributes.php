<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SearchableSegmentAttributesCriteria> $Criteria
 * @property 'MATCH_ALL'|'MATCH_ANY' $MatchType
 */
class SearchableSegmentAttributes extends Shape
{
    /**
     * @param array{
     *     Criteria: list<SearchableSegmentAttributesCriteria>,
     *     MatchType?: 'MATCH_ALL'|'MATCH_ANY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
