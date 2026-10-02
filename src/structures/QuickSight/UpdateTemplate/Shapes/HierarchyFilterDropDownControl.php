<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $SourceFilterId
 * @property string|null $Title
 * @property HierarchyFilterDropDownControlDisplayOptions|null $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT'|null $Type
 * @property 'AUTO'|'MANUAL'|null $CommitMode
 * @property list<ControlSortConfiguration>|null $ControlSortConfigurations
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class HierarchyFilterDropDownControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     SourceFilterId: string,
     *     Title?: string|null,
     *     DisplayOptions?: HierarchyFilterDropDownControlDisplayOptions|null,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT'|null,
     *     CommitMode?: 'AUTO'|'MANUAL'|null,
     *     ControlSortConfigurations?: list<ControlSortConfiguration>|null,
     *     ControlTitleFormatText?: ControlTitleFormatText|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
