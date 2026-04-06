<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string $Title
 * @property string $SourceParameterName
 * @property DropDownControlDisplayOptions|null $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT'|null $Type
 * @property ParameterSelectableValues|null $SelectableValues
 * @property CascadingControlConfiguration|null $CascadingControlConfiguration
 * @property 'AUTO'|'MANUAL'|null $CommitMode
 */
class ParameterDropDownControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title: string,
     *     SourceParameterName: string,
     *     DisplayOptions?: DropDownControlDisplayOptions|null,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT'|null,
     *     SelectableValues?: ParameterSelectableValues|null,
     *     CascadingControlConfiguration?: CascadingControlConfiguration|null,
     *     CommitMode?: 'AUTO'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
