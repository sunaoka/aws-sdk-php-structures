<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnswerRecommendationAIAgentConfiguration|null $answerRecommendationAIAgentConfiguration
 * @property ManualSearchAIAgentConfiguration|null $manualSearchAIAgentConfiguration
 * @property SelfServiceAIAgentConfiguration|null $selfServiceAIAgentConfiguration
 */
class AIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     answerRecommendationAIAgentConfiguration?: AnswerRecommendationAIAgentConfiguration|null,
     *     manualSearchAIAgentConfiguration?: ManualSearchAIAgentConfiguration|null,
     *     selfServiceAIAgentConfiguration?: SelfServiceAIAgentConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
