<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string $Title
 * @property string $SourceParameterName
 * @property ListControlDisplayOptions $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT' $Type
 * @property ParameterSelectableValues $SelectableValues
 * @property CascadingControlConfiguration $CascadingControlConfiguration
 */
class ParameterListControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title: string,
     *     SourceParameterName: string,
     *     DisplayOptions?: ListControlDisplayOptions,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT',
     *     SelectableValues?: ParameterSelectableValues,
     *     CascadingControlConfiguration?: CascadingControlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
