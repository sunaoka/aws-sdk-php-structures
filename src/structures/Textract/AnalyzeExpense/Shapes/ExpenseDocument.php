<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeExpense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $ExpenseIndex
 * @property list<ExpenseField> $SummaryFields
 * @property list<LineItemGroup> $LineItemGroups
 * @property list<Block> $Blocks
 */
class ExpenseDocument extends Shape
{
    /**
     * @param array{
     *     ExpenseIndex?: int<0, max>,
     *     SummaryFields?: list<ExpenseField>,
     *     LineItemGroups?: list<LineItemGroup>,
     *     Blocks?: list<Block>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
