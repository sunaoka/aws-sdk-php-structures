<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $LineItemGroupIndex
 * @property list<LineItemFields>|null $LineItems
 */
class LineItemGroup extends Shape
{
    /**
     * @param array{
     *     LineItemGroupIndex?: int<0, max>|null,
     *     LineItems?: list<LineItemFields>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
