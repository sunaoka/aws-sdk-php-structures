<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptFlowNodeInlineConfiguration|null $inline
 * @property PromptFlowNodeResourceConfiguration|null $resource
 */
class PromptFlowNodeSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     inline?: PromptFlowNodeInlineConfiguration|null,
     *     resource?: PromptFlowNodeResourceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
