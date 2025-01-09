<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Predicate> $or
 * @property list<Predicate> $and
 * @property string $field
 * @property string $operator
 * @property string $operand
 * @property string $operandType
 */
class Predicate extends Shape
{
    /**
     * @param array{
     *     or?: list<Predicate>,
     *     and?: list<Predicate>,
     *     field?: string,
     *     operator?: string,
     *     operand?: string,
     *     operandType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
