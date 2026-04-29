<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemPromptConfig $systemPrompt
 * @property AgentTracesConfig $agentTraces
 * @property RecommendationEvaluationConfig $evaluationConfig
 */
class SystemPromptRecommendationConfig extends Shape
{
    /**
     * @param array{
     *     systemPrompt: SystemPromptConfig,
     *     agentTraces: AgentTracesConfig,
     *     evaluationConfig: RecommendationEvaluationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
