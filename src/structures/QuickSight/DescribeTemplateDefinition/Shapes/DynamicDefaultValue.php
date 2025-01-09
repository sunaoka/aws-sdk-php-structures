<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $UserNameColumn
 * @property ColumnIdentifier $GroupNameColumn
 * @property ColumnIdentifier $DefaultValueColumn
 */
class DynamicDefaultValue extends Shape
{
    /**
     * @param array{
     *     UserNameColumn?: ColumnIdentifier,
     *     GroupNameColumn?: ColumnIdentifier,
     *     DefaultValueColumn: ColumnIdentifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
