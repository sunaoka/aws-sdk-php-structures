<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExpenseField> $LineItemExpenseFields
 */
class LineItemFields extends Shape
{
    /**
     * @param array{LineItemExpenseFields?: list<ExpenseField>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
