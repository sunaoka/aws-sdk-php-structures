<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string|null $Title
 * @property string $SourceParameterName
 * @property DropDownControlDisplayOptions|null $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT'|null $Type
 * @property ParameterSelectableValues|null $SelectableValues
 * @property CascadingControlConfiguration|null $CascadingControlConfiguration
 * @property 'AUTO'|'MANUAL'|null $CommitMode
 * @property list<ControlSortConfiguration>|null $ControlSortConfigurations
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class ParameterDropDownControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title?: string|null,
     *     SourceParameterName: string,
     *     DisplayOptions?: DropDownControlDisplayOptions|null,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT'|null,
     *     SelectableValues?: ParameterSelectableValues|null,
     *     CascadingControlConfiguration?: CascadingControlConfiguration|null,
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
