<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutboundCallerIdName
 * @property string|null $OutboundCallerIdNumberId
 * @property string|null $OutboundFlowId
 */
class OutboundCallerConfig extends Shape
{
    /**
     * @param array{
     *     OutboundCallerIdName?: string|null,
     *     OutboundCallerIdNumberId?: string|null,
     *     OutboundFlowId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
