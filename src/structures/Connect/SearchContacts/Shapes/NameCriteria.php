<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SearchText
 * @property 'MATCH_ALL'|'MATCH_ANY'|'MATCH_EXACT'|'MATCH_NONE' $MatchType
 */
class NameCriteria extends Shape
{
    /**
     * @param array{
     *     SearchText: list<string>,
     *     MatchType: 'MATCH_ALL'|'MATCH_ANY'|'MATCH_EXACT'|'MATCH_NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
