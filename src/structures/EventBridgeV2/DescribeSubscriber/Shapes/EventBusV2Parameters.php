<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Metadata
 * @property EventBusV2SystemMetadata|null $SystemMetadata
 * @property DeduplicationConfiguration|null $DeduplicationConfiguration
 */
class EventBusV2Parameters extends Shape
{
    /**
     * @param array{
     *     Metadata?: array<string, string>|null,
     *     SystemMetadata?: EventBusV2SystemMetadata|null,
     *     DeduplicationConfiguration?: DeduplicationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
