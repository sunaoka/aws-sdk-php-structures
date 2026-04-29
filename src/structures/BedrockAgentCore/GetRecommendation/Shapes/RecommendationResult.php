<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemPromptRecommendationResult|null $systemPromptRecommendationResult
 * @property ToolDescriptionRecommendationResult|null $toolDescriptionRecommendationResult
 */
class RecommendationResult extends Shape
{
    /**
     * @param array{
     *     systemPromptRecommendationResult?: SystemPromptRecommendationResult|null,
     *     toolDescriptionRecommendationResult?: ToolDescriptionRecommendationResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
