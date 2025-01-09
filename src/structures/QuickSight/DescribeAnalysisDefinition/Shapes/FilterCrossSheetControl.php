<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $SourceFilterId
 * @property CascadingControlConfiguration $CascadingControlConfiguration
 */
class FilterCrossSheetControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     SourceFilterId: string,
     *     CascadingControlConfiguration?: CascadingControlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
