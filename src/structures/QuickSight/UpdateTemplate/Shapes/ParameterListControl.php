<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string $Title
 * @property string $SourceParameterName
 * @property ListControlDisplayOptions|null $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT'|null $Type
 * @property ParameterSelectableValues|null $SelectableValues
 * @property CascadingControlConfiguration|null $CascadingControlConfiguration
 */
class ParameterListControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title: string,
     *     SourceParameterName: string,
     *     DisplayOptions?: ListControlDisplayOptions|null,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT'|null,
     *     SelectableValues?: ParameterSelectableValues|null,
     *     CascadingControlConfiguration?: CascadingControlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
