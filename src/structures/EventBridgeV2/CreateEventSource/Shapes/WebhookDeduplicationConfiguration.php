<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTENT_BASED' $DeduplicationType
 */
class WebhookDeduplicationConfiguration extends Shape
{
    /**
     * @param array{DeduplicationType: 'CONTENT_BASED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
