<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptFlowNodeResourceConfiguration|null $resource
 * @property PromptFlowNodeInlineConfiguration|null $inline
 */
class PromptFlowNodeSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     resource?: PromptFlowNodeResourceConfiguration|null,
     *     inline?: PromptFlowNodeInlineConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
