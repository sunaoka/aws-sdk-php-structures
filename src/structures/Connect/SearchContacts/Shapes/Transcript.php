<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TranscriptCriteria> $Criteria
 * @property 'MATCH_ALL'|'MATCH_ANY'|'MATCH_EXACT'|'MATCH_NONE'|null $MatchType
 */
class Transcript extends Shape
{
    /**
     * @param array{
     *     Criteria: list<TranscriptCriteria>,
     *     MatchType?: 'MATCH_ALL'|'MATCH_ANY'|'MATCH_EXACT'|'MATCH_NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
