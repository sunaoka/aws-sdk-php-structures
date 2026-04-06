<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssociationConfiguration>|null $associationConfigurations
 * @property string|null $selfServiceAIGuardrailId
 * @property string|null $selfServiceAnswerGenerationAIPromptId
 * @property string|null $selfServicePreProcessingAIPromptId
 */
class SelfServiceAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     associationConfigurations?: list<AssociationConfiguration>|null,
     *     selfServiceAIGuardrailId?: string|null,
     *     selfServiceAnswerGenerationAIPromptId?: string|null,
     *     selfServicePreProcessingAIPromptId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
