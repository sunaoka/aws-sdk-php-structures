<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string|null $Title
 * @property string $SourceParameterName
 * @property ListControlDisplayOptions|null $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT'|null $Type
 * @property ParameterSelectableValues|null $SelectableValues
 * @property CascadingControlConfiguration|null $CascadingControlConfiguration
 * @property list<ControlSortConfiguration>|null $ControlSortConfigurations
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class ParameterListControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title?: string|null,
     *     SourceParameterName: string,
     *     DisplayOptions?: ListControlDisplayOptions|null,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT'|null,
     *     SelectableValues?: ParameterSelectableValues|null,
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
