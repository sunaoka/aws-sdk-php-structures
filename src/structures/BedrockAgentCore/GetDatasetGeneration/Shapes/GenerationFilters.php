<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GenerationAttributeFilter>|null $attributeFilters
 * @property TurnCountRange|null $turnCount
 * @property list<EvaluatorFilter>|null $evaluatorFilters
 */
class GenerationFilters extends Shape
{
    /**
     * @param array{
     *     attributeFilters?: list<GenerationAttributeFilter>|null,
     *     turnCount?: TurnCountRange|null,
     *     evaluatorFilters?: list<EvaluatorFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
