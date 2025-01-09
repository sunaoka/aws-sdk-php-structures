<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeExpense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Types
 * @property string $Id
 */
class ExpenseGroupProperty extends Shape
{
    /**
     * @param array{
     *     Types?: list<string>,
     *     Id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
