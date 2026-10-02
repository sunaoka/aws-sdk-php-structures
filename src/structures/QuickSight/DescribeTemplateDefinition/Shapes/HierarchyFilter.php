<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property list<HierarchyFilterLevel> $HierarchyLevels
 * @property HierarchyFilterNode|null $HierarchyTree
 * @property 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY' $NullOption
 * @property 'INCLUDE'|'EXCLUDE' $MatchOperator
 * @property DefaultFilterControlConfiguration|null $DefaultFilterControlConfiguration
 */
class HierarchyFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     HierarchyLevels: list<HierarchyFilterLevel>,
     *     HierarchyTree?: HierarchyFilterNode|null,
     *     NullOption: 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY',
     *     MatchOperator: 'INCLUDE'|'EXCLUDE',
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
