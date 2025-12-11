<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOnlineEvaluationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property 'Equals'|'NotEquals'|'GreaterThan'|'LessThan'|'GreaterThanOrEqual'|'LessThanOrEqual'|'Contains'|'NotContains' $operator
 * @property FilterValue $value
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     operator: 'Equals'|'NotEquals'|'GreaterThan'|'LessThan'|'GreaterThanOrEqual'|'LessThanOrEqual'|'Contains'|'NotContains',
     *     value: FilterValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
