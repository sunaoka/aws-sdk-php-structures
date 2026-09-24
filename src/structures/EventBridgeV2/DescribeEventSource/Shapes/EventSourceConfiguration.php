<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeEventSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsServiceEventsSourceConfiguration|null $AwsServiceEventsConfiguration
 * @property PartnerEventsSourceConfiguration|null $PartnerEventsConfiguration
 */
class EventSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     AwsServiceEventsConfiguration?: AwsServiceEventsSourceConfiguration|null,
     *     PartnerEventsConfiguration?: PartnerEventsSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
