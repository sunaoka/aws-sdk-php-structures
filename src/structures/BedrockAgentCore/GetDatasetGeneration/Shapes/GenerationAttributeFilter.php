<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property 'Equals'|'NotEquals'|'GreaterThan'|'LessThan'|'GreaterThanOrEqual'|'LessThanOrEqual'|'Contains'|'NotContains' $operator
 * @property GenerationFilterValue $value
 */
class GenerationAttributeFilter extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     operator: 'Equals'|'NotEquals'|'GreaterThan'|'LessThan'|'GreaterThanOrEqual'|'LessThanOrEqual'|'Contains'|'NotContains',
     *     value: GenerationFilterValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
