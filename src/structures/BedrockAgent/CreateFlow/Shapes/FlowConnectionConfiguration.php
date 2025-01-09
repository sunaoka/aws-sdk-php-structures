<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowConditionalConnectionConfiguration $conditional
 * @property FlowDataConnectionConfiguration $data
 */
class FlowConnectionConfiguration extends Shape
{
    /**
     * @param array{
     *     conditional?: FlowConditionalConnectionConfiguration,
     *     data?: FlowDataConnectionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
