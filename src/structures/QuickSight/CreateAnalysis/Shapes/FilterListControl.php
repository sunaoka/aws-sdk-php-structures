<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string|null $Title
 * @property string $SourceFilterId
 * @property ListControlDisplayOptions|null $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT'|null $Type
 * @property FilterSelectableValues|null $SelectableValues
 * @property CascadingControlConfiguration|null $CascadingControlConfiguration
 * @property list<ControlSortConfiguration>|null $ControlSortConfigurations
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class FilterListControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title?: string|null,
     *     SourceFilterId: string,
     *     DisplayOptions?: ListControlDisplayOptions|null,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT'|null,
     *     SelectableValues?: FilterSelectableValues|null,
     *     CascadingControlConfiguration?: CascadingControlConfiguration|null,
     *     ControlSortConfigurations?: list<ControlSortConfiguration>|null,
     *     ControlTitleFormatText?: ControlTitleFormatText|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
