<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $evaluatorId
 * @property string|null $evaluationDimensionName
 * @property 'Equals'|'NotEquals'|'GreaterThan'|'LessThan'|'GreaterThanOrEqual'|'LessThanOrEqual'|'Contains'|'NotContains' $operator
 * @property GenerationFilterValue $value
 * @property 'Min'|'Max'|'Mean'|'AllMatch'|'AnyMatch'|null $aggregation
 */
class EvaluatorFilter extends Shape
{
    /**
     * @param array{
     *     evaluatorId: string,
     *     evaluationDimensionName?: string|null,
     *     operator: 'Equals'|'NotEquals'|'GreaterThan'|'LessThan'|'GreaterThanOrEqual'|'LessThanOrEqual'|'Contains'|'NotContains',
     *     value: GenerationFilterValue,
     *     aggregation?: 'Min'|'Max'|'Mean'|'AllMatch'|'AnyMatch'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
