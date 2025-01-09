<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $Title
 * @property string $SourceFilterId
 * @property DropDownControlDisplayOptions $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT' $Type
 * @property FilterSelectableValues $SelectableValues
 * @property CascadingControlConfiguration $CascadingControlConfiguration
 * @property 'AUTO'|'MANUAL' $CommitMode
 */
class FilterDropDownControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title: string,
     *     SourceFilterId: string,
     *     DisplayOptions?: DropDownControlDisplayOptions,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT',
     *     SelectableValues?: FilterSelectableValues,
     *     CascadingControlConfiguration?: CascadingControlConfiguration,
     *     CommitMode?: 'AUTO'|'MANUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
