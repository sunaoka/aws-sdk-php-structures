<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OperandOne $operandOne
 * @property OperandTwo $operandTwo
 * @property bool $result
 */
class BooleanOperands extends Shape
{
    /**
     * @param array{
     *     operandOne: OperandOne,
     *     operandTwo: OperandTwo,
     *     result: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
