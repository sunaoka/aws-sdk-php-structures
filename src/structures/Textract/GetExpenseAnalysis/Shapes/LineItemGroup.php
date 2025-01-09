<?php

namespace Sunaoka\Aws\Structures\Textract\GetExpenseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $LineItemGroupIndex
 * @property list<LineItemFields> $LineItems
 */
class LineItemGroup extends Shape
{
    /**
     * @param array{
     *     LineItemGroupIndex?: int<0, max>,
     *     LineItems?: list<LineItemFields>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
