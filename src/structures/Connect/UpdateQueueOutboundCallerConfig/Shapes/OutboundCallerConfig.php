<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQueueOutboundCallerConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutboundCallerIdName
 * @property string $OutboundCallerIdNumberId
 * @property string $OutboundFlowId
 */
class OutboundCallerConfig extends Shape
{
    /**
     * @param array{
     *     OutboundCallerIdName?: string,
     *     OutboundCallerIdNumberId?: string,
     *     OutboundFlowId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
