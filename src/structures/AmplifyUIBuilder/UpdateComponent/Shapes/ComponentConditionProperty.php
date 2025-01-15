<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $property
 * @property string|null $field
 * @property string|null $operator
 * @property string|null $operand
 * @property ComponentProperty|null $then
 * @property ComponentProperty|null $else
 * @property string|null $operandType
 */
class ComponentConditionProperty extends Shape
{
    /**
     * @param array{
     *     property?: string|null,
     *     field?: string|null,
     *     operator?: string|null,
     *     operand?: string|null,
     *     then?: ComponentProperty|null,
     *     else?: ComponentProperty|null,
     *     operandType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
