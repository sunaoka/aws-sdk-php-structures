<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $answerGenerationAIGuardrailId
 * @property string $answerGenerationAIPromptId
 * @property list<AssociationConfiguration> $associationConfigurations
 * @property string $intentLabelingGenerationAIPromptId
 * @property string $locale
 * @property string $queryReformulationAIPromptId
 */
class AnswerRecommendationAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     answerGenerationAIGuardrailId?: string,
     *     answerGenerationAIPromptId?: string,
     *     associationConfigurations?: list<AssociationConfiguration>,
     *     intentLabelingGenerationAIPromptId?: string,
     *     locale?: string,
     *     queryReformulationAIPromptId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
