<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PutEventsRequestEntry> $Entries
 * @property string $EndpointId
 */
class PutEventsRequest extends Request
{
    /**
     * @param array{
     *     Entries: list<Shapes\PutEventsRequestEntry>,
     *     EndpointId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
