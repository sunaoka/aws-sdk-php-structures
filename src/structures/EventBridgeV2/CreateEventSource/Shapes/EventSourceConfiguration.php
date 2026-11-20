<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsServiceEventsSourceConfiguration|null $AwsServiceEventsConfiguration
 * @property PartnerEventsSourceConfiguration|null $PartnerEventsConfiguration
 * @property WebhookEventsSourceConfiguration|null $WebhookEventsConfiguration
 */
class EventSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     AwsServiceEventsConfiguration?: AwsServiceEventsSourceConfiguration|null,
     *     PartnerEventsConfiguration?: PartnerEventsSourceConfiguration|null,
     *     WebhookEventsConfiguration?: WebhookEventsSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
