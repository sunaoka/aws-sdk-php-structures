<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutPartnerEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PutPartnerEventsRequestEntry> $Entries
 */
class PutPartnerEventsRequest extends Request
{
    /**
     * @param array{Entries: list<Shapes\PutPartnerEventsRequestEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
