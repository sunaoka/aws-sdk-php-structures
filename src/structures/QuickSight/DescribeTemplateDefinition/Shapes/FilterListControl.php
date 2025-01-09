<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $Title
 * @property string $SourceFilterId
 * @property ListControlDisplayOptions $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT' $Type
 * @property FilterSelectableValues $SelectableValues
 * @property CascadingControlConfiguration $CascadingControlConfiguration
 */
class FilterListControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title: string,
     *     SourceFilterId: string,
     *     DisplayOptions?: ListControlDisplayOptions,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT',
     *     SelectableValues?: FilterSelectableValues,
     *     CascadingControlConfiguration?: CascadingControlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
