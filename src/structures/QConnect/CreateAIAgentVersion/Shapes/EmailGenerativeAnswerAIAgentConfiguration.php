<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $emailGenerativeAnswerAIPromptId
 * @property string|null $emailQueryReformulationAIPromptId
 * @property string|null $locale
 * @property list<AssociationConfiguration>|null $associationConfigurations
 */
class EmailGenerativeAnswerAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     emailGenerativeAnswerAIPromptId?: string|null,
     *     emailQueryReformulationAIPromptId?: string|null,
     *     locale?: string|null,
     *     associationConfigurations?: list<AssociationConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
