<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolName
 * @property ToolDescriptionConfig $toolDescription
 */
class ToolDescriptionInput extends Shape
{
    /**
     * @param array{
     *     toolName: string,
     *     toolDescription: ToolDescriptionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
