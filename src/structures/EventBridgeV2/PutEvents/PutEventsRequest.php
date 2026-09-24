<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\PutEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventBusArn
 * @property list<Shapes\PutEventsRequestEntry> $Entries
 * @property Shapes\DeduplicationConfiguration|null $DeduplicationConfiguration
 */
class PutEventsRequest extends Request
{
    /**
     * @param array{
     *     EventBusArn: string,
     *     Entries: list<Shapes\PutEventsRequestEntry>,
     *     DeduplicationConfiguration?: Shapes\DeduplicationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
