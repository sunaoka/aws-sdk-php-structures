<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR' $ParticipantRole
 * @property list<string> $SearchText
 * @property 'MATCH_ALL'|'MATCH_ANY'|'MATCH_EXACT'|'MATCH_NONE' $MatchType
 */
class TranscriptCriteria extends Shape
{
    /**
     * @param array{
     *     ParticipantRole: 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR',
     *     SearchText: list<string>,
     *     MatchType: 'MATCH_ALL'|'MATCH_ANY'|'MATCH_EXACT'|'MATCH_NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
