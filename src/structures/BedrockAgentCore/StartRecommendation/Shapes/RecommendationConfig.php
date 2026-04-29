<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemPromptRecommendationConfig|null $systemPromptRecommendationConfig
 * @property ToolDescriptionRecommendationConfig|null $toolDescriptionRecommendationConfig
 */
class RecommendationConfig extends Shape
{
    /**
     * @param array{
     *     systemPromptRecommendationConfig?: SystemPromptRecommendationConfig|null,
     *     toolDescriptionRecommendationConfig?: ToolDescriptionRecommendationConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
