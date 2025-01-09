<?php

namespace Sunaoka\Aws\Structures\Textract\GetExpenseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExpenseType $Type
 * @property ExpenseDetection $LabelDetection
 * @property ExpenseDetection $ValueDetection
 * @property int<0, max> $PageNumber
 * @property ExpenseCurrency $Currency
 * @property list<ExpenseGroupProperty> $GroupProperties
 */
class ExpenseField extends Shape
{
    /**
     * @param array{
     *     Type?: ExpenseType,
     *     LabelDetection?: ExpenseDetection,
     *     ValueDetection?: ExpenseDetection,
     *     PageNumber?: int<0, max>,
     *     Currency?: ExpenseCurrency,
     *     GroupProperties?: list<ExpenseGroupProperty>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
