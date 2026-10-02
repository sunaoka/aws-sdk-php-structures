<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property string|null $ParentValue
 * @property list<string>|null $HierarchyValues
 * @property list<HierarchyFilterNode>|null $Children
 */
class HierarchyFilterNode extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     ParentValue?: string|null,
     *     HierarchyValues?: list<string>|null,
     *     Children?: list<HierarchyFilterNode>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
