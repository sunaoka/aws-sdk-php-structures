<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolDescriptionSource $toolDescription
 * @property AgentTracesConfig $agentTraces
 */
class ToolDescriptionRecommendationConfig extends Shape
{
    /**
     * @param array{
     *     toolDescription: ToolDescriptionSource,
     *     agentTraces: AgentTracesConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
