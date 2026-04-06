<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $SourceFilterId
 * @property CascadingControlConfiguration|null $CascadingControlConfiguration
 */
class FilterCrossSheetControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     SourceFilterId: string,
     *     CascadingControlConfiguration?: CascadingControlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
