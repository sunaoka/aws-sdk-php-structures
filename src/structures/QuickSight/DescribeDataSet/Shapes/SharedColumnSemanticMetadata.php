<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ColumnNames
 * @property list<ColumnSemanticProperty> $ColumnProperties
 */
class SharedColumnSemanticMetadata extends Shape
{
    /**
     * @param array{
     *     ColumnNames?: list<string>|null,
     *     ColumnProperties: list<ColumnSemanticProperty>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
