<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $selfServicePreProcessingAIPromptId
 * @property string|null $selfServiceAnswerGenerationAIPromptId
 * @property string|null $selfServiceAIGuardrailId
 * @property list<AssociationConfiguration>|null $associationConfigurations
 */
class SelfServiceAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     selfServicePreProcessingAIPromptId?: string|null,
     *     selfServiceAnswerGenerationAIPromptId?: string|null,
     *     selfServiceAIGuardrailId?: string|null,
     *     associationConfigurations?: list<AssociationConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
