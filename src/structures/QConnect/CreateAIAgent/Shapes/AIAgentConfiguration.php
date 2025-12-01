<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManualSearchAIAgentConfiguration|null $manualSearchAIAgentConfiguration
 * @property AnswerRecommendationAIAgentConfiguration|null $answerRecommendationAIAgentConfiguration
 * @property SelfServiceAIAgentConfiguration|null $selfServiceAIAgentConfiguration
 * @property EmailResponseAIAgentConfiguration|null $emailResponseAIAgentConfiguration
 * @property EmailOverviewAIAgentConfiguration|null $emailOverviewAIAgentConfiguration
 * @property EmailGenerativeAnswerAIAgentConfiguration|null $emailGenerativeAnswerAIAgentConfiguration
 * @property OrchestrationAIAgentConfiguration|null $orchestrationAIAgentConfiguration
 * @property NoteTakingAIAgentConfiguration|null $noteTakingAIAgentConfiguration
 * @property CaseSummarizationAIAgentConfiguration|null $caseSummarizationAIAgentConfiguration
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
     *     emailGenerativeAnswerAIAgentConfiguration?: EmailGenerativeAnswerAIAgentConfiguration|null,
     *     orchestrationAIAgentConfiguration?: OrchestrationAIAgentConfiguration|null,
     *     noteTakingAIAgentConfiguration?: NoteTakingAIAgentConfiguration|null,
     *     caseSummarizationAIAgentConfiguration?: CaseSummarizationAIAgentConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
