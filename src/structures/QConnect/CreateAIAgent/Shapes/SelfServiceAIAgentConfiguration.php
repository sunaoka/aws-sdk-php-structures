<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssociationConfiguration> $associationConfigurations
 * @property string $selfServiceAIGuardrailId
 * @property string $selfServiceAnswerGenerationAIPromptId
 * @property string $selfServicePreProcessingAIPromptId
 */
class SelfServiceAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     associationConfigurations?: list<AssociationConfiguration>,
     *     selfServiceAIGuardrailId?: string,
     *     selfServiceAnswerGenerationAIPromptId?: string,
     *     selfServicePreProcessingAIPromptId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
