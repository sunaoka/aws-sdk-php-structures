<?php

namespace Sunaoka\Aws\Structures\GameLift\AcceptMatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TicketId
 * @property list<string> $PlayerIds
 * @property 'ACCEPT'|'REJECT' $AcceptanceType
 */
class AcceptMatchRequest extends Request
{
    /**
     * @param array{
     *     TicketId: string,
     *     PlayerIds: list<string>,
     *     AcceptanceType: 'ACCEPT'|'REJECT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
