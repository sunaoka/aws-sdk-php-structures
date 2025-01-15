<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Predicate>|null $or
 * @property list<Predicate>|null $and
 * @property string|null $field
 * @property string|null $operator
 * @property string|null $operand
 * @property string|null $operandType
 */
class Predicate extends Shape
{
    /**
     * @param array{
     *     or?: list<Predicate>|null,
     *     and?: list<Predicate>|null,
     *     field?: string|null,
     *     operator?: string|null,
     *     operand?: string|null,
     *     operandType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
