<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\PutRawEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventBusArn
 * @property list<Shapes\PutRawEventsRequestEntry> $Entries
 * @property Shapes\SchemaRegistryConfiguration|null $SchemaRegistryConfiguration
 * @property Shapes\DeduplicationConfiguration|null $DeduplicationConfiguration
 */
class PutRawEventsRequest extends Request
{
    /**
     * @param array{
     *     EventBusArn: string,
     *     Entries: list<Shapes\PutRawEventsRequestEntry>,
     *     SchemaRegistryConfiguration?: Shapes\SchemaRegistryConfiguration|null,
     *     DeduplicationConfiguration?: Shapes\DeduplicationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
