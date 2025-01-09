<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PutEventsRequestEntry> $Entries
 */
class PutEventsRequest extends Request
{
    /**
     * @param array{Entries: list<Shapes\PutEventsRequestEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
