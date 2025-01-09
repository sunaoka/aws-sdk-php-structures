<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnswerRecommendationAIAgentConfiguration $answerRecommendationAIAgentConfiguration
 * @property ManualSearchAIAgentConfiguration $manualSearchAIAgentConfiguration
 * @property SelfServiceAIAgentConfiguration $selfServiceAIAgentConfiguration
 */
class AIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     answerRecommendationAIAgentConfiguration?: AnswerRecommendationAIAgentConfiguration,
     *     manualSearchAIAgentConfiguration?: ManualSearchAIAgentConfiguration,
     *     selfServiceAIAgentConfiguration?: SelfServiceAIAgentConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
