<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $answerGenerationAIGuardrailId
 * @property string|null $answerGenerationAIPromptId
 * @property list<AssociationConfiguration>|null $associationConfigurations
 * @property string|null $intentLabelingGenerationAIPromptId
 * @property string|null $locale
 * @property string|null $queryReformulationAIPromptId
 */
class AnswerRecommendationAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     answerGenerationAIGuardrailId?: string|null,
     *     answerGenerationAIPromptId?: string|null,
     *     associationConfigurations?: list<AssociationConfiguration>|null,
     *     intentLabelingGenerationAIPromptId?: string|null,
     *     locale?: string|null,
     *     queryReformulationAIPromptId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
