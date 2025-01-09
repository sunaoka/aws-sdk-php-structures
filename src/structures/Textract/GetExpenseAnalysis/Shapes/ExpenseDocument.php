<?php

namespace Sunaoka\Aws\Structures\Textract\GetExpenseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ExpenseIndex
 * @property list<ExpenseField> $SummaryFields
 * @property list<LineItemGroup> $LineItemGroups
 * @property list<Block> $Blocks
 */
class ExpenseDocument extends Shape
{
    /**
     * @param array{
     *     ExpenseIndex?: int,
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
