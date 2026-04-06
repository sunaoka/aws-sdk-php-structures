<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fieldId
 */
class OperandOne extends Shape
{
    /**
     * @param array{fieldId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
