<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeExpense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $LineItemGroupIndex
 * @property list<LineItemFields> $LineItems
 */
class LineItemGroup extends Shape
{
    /**
     * @param array{
     *     LineItemGroupIndex?: int,
     *     LineItems?: list<LineItemFields>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
