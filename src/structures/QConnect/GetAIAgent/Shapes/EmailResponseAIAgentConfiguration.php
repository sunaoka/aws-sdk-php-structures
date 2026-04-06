<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $emailResponseAIPromptId
 * @property string|null $emailQueryReformulationAIPromptId
 * @property string|null $locale
 * @property list<AssociationConfiguration>|null $associationConfigurations
 */
class EmailResponseAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     emailResponseAIPromptId?: string|null,
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
