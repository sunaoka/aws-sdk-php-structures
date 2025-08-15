<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowDataConnectionConfiguration|null $data
 * @property FlowConditionalConnectionConfiguration|null $conditional
 */
class FlowConnectionConfiguration extends Shape
{
    /**
     * @param array{
     *     data?: FlowDataConnectionConfiguration|null,
     *     conditional?: FlowConditionalConnectionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
