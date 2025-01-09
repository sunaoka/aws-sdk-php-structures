<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $property
 * @property string $field
 * @property string $operator
 * @property string $operand
 * @property ComponentProperty $then
 * @property ComponentProperty $else
 * @property string $operandType
 */
class ComponentConditionProperty extends Shape
{
    /**
     * @param array{
     *     property?: string,
     *     field?: string,
     *     operator?: string,
     *     operand?: string,
     *     then?: ComponentProperty,
     *     else?: ComponentProperty,
     *     operandType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
