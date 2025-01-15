<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeExpense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExpenseType|null $Type
 * @property ExpenseDetection|null $LabelDetection
 * @property ExpenseDetection|null $ValueDetection
 * @property int<0, max>|null $PageNumber
 * @property ExpenseCurrency|null $Currency
 * @property list<ExpenseGroupProperty>|null $GroupProperties
 */
class ExpenseField extends Shape
{
    /**
     * @param array{
     *     Type?: ExpenseType|null,
     *     LabelDetection?: ExpenseDetection|null,
     *     ValueDetection?: ExpenseDetection|null,
     *     PageNumber?: int<0, max>|null,
     *     Currency?: ExpenseCurrency|null,
     *     GroupProperties?: list<ExpenseGroupProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
