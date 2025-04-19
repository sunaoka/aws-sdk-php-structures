<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManualSearchAIAgentConfiguration|null $manualSearchAIAgentConfiguration
 * @property AnswerRecommendationAIAgentConfiguration|null $answerRecommendationAIAgentConfiguration
 * @property SelfServiceAIAgentConfiguration|null $selfServiceAIAgentConfiguration
 */
class AIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     manualSearchAIAgentConfiguration?: ManualSearchAIAgentConfiguration|null,
     *     answerRecommendationAIAgentConfiguration?: AnswerRecommendationAIAgentConfiguration|null,
     *     selfServiceAIAgentConfiguration?: SelfServiceAIAgentConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
