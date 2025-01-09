<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptFlowNodeInlineConfiguration $inline
 * @property PromptFlowNodeResourceConfiguration $resource
 */
class PromptFlowNodeSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     inline?: PromptFlowNodeInlineConfiguration,
     *     resource?: PromptFlowNodeResourceConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
