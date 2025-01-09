<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $answerGenerationAIGuardrailId
 * @property string $answerGenerationAIPromptId
 * @property list<AssociationConfiguration> $associationConfigurations
 * @property string $locale
 */
class ManualSearchAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     answerGenerationAIGuardrailId?: string,
     *     answerGenerationAIPromptId?: string,
     *     associationConfigurations?: list<AssociationConfiguration>,
     *     locale?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
