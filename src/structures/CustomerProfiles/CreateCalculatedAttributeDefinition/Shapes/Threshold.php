<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'EQUAL_TO'|'GREATER_THAN'|'LESS_THAN'|'NOT_EQUAL_TO' $Operator
 */
class Threshold extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     Operator: 'EQUAL_TO'|'GREATER_THAN'|'LESS_THAN'|'NOT_EQUAL_TO'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
