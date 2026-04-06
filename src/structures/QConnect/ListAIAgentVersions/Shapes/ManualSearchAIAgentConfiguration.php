<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $answerGenerationAIPromptId
 * @property string|null $answerGenerationAIGuardrailId
 * @property list<AssociationConfiguration>|null $associationConfigurations
 * @property string|null $locale
 */
class ManualSearchAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     answerGenerationAIPromptId?: string|null,
     *     answerGenerationAIGuardrailId?: string|null,
     *     associationConfigurations?: list<AssociationConfiguration>|null,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
