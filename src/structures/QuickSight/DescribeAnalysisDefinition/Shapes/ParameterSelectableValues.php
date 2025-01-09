<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Values
 * @property ColumnIdentifier $LinkToDataSetColumn
 */
class ParameterSelectableValues extends Shape
{
    /**
     * @param array{
     *     Values?: list<string>,
     *     LinkToDataSetColumn?: ColumnIdentifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
