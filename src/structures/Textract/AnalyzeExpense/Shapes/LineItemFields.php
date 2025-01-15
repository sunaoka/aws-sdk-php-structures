<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeExpense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExpenseField>|null $LineItemExpenseFields
 */
class LineItemFields extends Shape
{
    /**
     * @param array{LineItemExpenseFields?: list<ExpenseField>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
