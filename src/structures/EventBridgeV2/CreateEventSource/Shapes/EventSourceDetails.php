<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebhookDetails|null $WebhookDetails
 */
class EventSourceDetails extends Shape
{
    /**
     * @param array{WebhookDetails?: WebhookDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
