<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ToolDescriptionInput> $tools
 */
class ToolDescriptionTextInput extends Shape
{
    /**
     * @param array{tools: list<ToolDescriptionInput>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
