<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManualSearchAIAgentConfiguration|null $manualSearchAIAgentConfiguration
 * @property AnswerRecommendationAIAgentConfiguration|null $answerRecommendationAIAgentConfiguration
 * @property SelfServiceAIAgentConfiguration|null $selfServiceAIAgentConfiguration
 * @property EmailResponseAIAgentConfiguration|null $emailResponseAIAgentConfiguration
 * @property EmailOverviewAIAgentConfiguration|null $emailOverviewAIAgentConfiguration
 * @property EmailGenerativeAnswerAIAgentConfiguration|null $emailGenerativeAnswerAIAgentConfiguration
 */
class AIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     manualSearchAIAgentConfiguration?: ManualSearchAIAgentConfiguration|null,
     *     answerRecommendationAIAgentConfiguration?: AnswerRecommendationAIAgentConfiguration|null,
     *     selfServiceAIAgentConfiguration?: SelfServiceAIAgentConfiguration|null,
     *     emailResponseAIAgentConfiguration?: EmailResponseAIAgentConfiguration|null,
     *     emailOverviewAIAgentConfiguration?: EmailOverviewAIAgentConfiguration|null,
     *     emailGenerativeAnswerAIAgentConfiguration?: EmailGenerativeAnswerAIAgentConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
