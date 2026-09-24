<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventGroupId
 * @property string|null $DeduplicationId
 */
class EventBusV2SystemMetadata extends Shape
{
    /**
     * @param array{
     *     EventGroupId?: string|null,
     *     DeduplicationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
