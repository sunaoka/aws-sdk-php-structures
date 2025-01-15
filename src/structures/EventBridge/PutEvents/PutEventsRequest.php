<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PutEventsRequestEntry> $Entries
 * @property string|null $EndpointId
 */
class PutEventsRequest extends Request
{
    /**
     * @param array{
     *     Entries: list<Shapes\PutEventsRequestEntry>,
     *     EndpointId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
