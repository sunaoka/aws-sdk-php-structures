<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $answerGenerationAIGuardrailId
 * @property string|null $answerGenerationAIPromptId
 * @property list<AssociationConfiguration>|null $associationConfigurations
 * @property string|null $locale
 */
class ManualSearchAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     answerGenerationAIGuardrailId?: string|null,
     *     answerGenerationAIPromptId?: string|null,
     *     associationConfigurations?: list<AssociationConfiguration>|null,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
