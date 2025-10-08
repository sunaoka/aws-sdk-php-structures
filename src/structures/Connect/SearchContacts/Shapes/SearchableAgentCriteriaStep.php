<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AgentIds
 * @property 'MATCH_ALL'|'MATCH_ANY'|'MATCH_EXACT'|'MATCH_NONE'|null $MatchType
 */
class SearchableAgentCriteriaStep extends Shape
{
    /**
     * @param array{
     *     AgentIds?: list<string>|null,
     *     MatchType?: 'MATCH_ALL'|'MATCH_ANY'|'MATCH_EXACT'|'MATCH_NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
