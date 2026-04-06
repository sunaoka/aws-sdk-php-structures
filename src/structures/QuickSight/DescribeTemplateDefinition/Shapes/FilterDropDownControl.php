<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $Title
 * @property string $SourceFilterId
 * @property DropDownControlDisplayOptions|null $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT'|null $Type
 * @property FilterSelectableValues|null $SelectableValues
 * @property CascadingControlConfiguration|null $CascadingControlConfiguration
 * @property 'AUTO'|'MANUAL'|null $CommitMode
 */
class FilterDropDownControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title: string,
     *     SourceFilterId: string,
     *     DisplayOptions?: DropDownControlDisplayOptions|null,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT'|null,
     *     SelectableValues?: FilterSelectableValues|null,
     *     CascadingControlConfiguration?: CascadingControlConfiguration|null,
     *     CommitMode?: 'AUTO'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
