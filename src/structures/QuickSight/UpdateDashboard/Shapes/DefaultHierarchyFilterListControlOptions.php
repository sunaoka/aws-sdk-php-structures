<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HierarchyFilterListControlDisplayOptions|null $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT'|null $Type
 * @property 'AUTO'|'MANUAL'|null $CommitMode
 * @property list<ControlSortConfiguration>|null $ControlSortConfigurations
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class DefaultHierarchyFilterListControlOptions extends Shape
{
    /**
     * @param array{
     *     DisplayOptions?: HierarchyFilterListControlDisplayOptions|null,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT'|null,
     *     CommitMode?: 'AUTO'|'MANUAL'|null,
     *     ControlSortConfigurations?: list<ControlSortConfiguration>|null,
     *     ControlTitleFormatText?: ControlTitleFormatText|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
