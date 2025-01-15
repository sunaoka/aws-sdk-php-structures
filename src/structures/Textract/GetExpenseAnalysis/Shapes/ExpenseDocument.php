<?php

namespace Sunaoka\Aws\Structures\Textract\GetExpenseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $ExpenseIndex
 * @property list<ExpenseField>|null $SummaryFields
 * @property list<LineItemGroup>|null $LineItemGroups
 * @property list<Block>|null $Blocks
 */
class ExpenseDocument extends Shape
{
    /**
     * @param array{
     *     ExpenseIndex?: int<0, max>|null,
     *     SummaryFields?: list<ExpenseField>|null,
     *     LineItemGroups?: list<LineItemGroup>|null,
     *     Blocks?: list<Block>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
