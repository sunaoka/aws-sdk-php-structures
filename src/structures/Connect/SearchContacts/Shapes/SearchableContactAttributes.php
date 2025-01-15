<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SearchableContactAttributesCriteria> $Criteria
 * @property 'MATCH_ALL'|'MATCH_ANY'|null $MatchType
 */
class SearchableContactAttributes extends Shape
{
    /**
     * @param array{
     *     Criteria: list<SearchableContactAttributesCriteria>,
     *     MatchType?: 'MATCH_ALL'|'MATCH_ANY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
