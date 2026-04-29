<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolName
 * @property string|null $recommendedToolDescription
 */
class ToolDescriptionOutput extends Shape
{
    /**
     * @param array{
     *     toolName: string,
     *     recommendedToolDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
