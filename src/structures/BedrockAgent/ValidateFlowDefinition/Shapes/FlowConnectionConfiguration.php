<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowConditionalConnectionConfiguration|null $conditional
 * @property FlowDataConnectionConfiguration|null $data
 */
class FlowConnectionConfiguration extends Shape
{
    /**
     * @param array{
     *     conditional?: FlowConditionalConnectionConfiguration|null,
     *     data?: FlowDataConnectionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
