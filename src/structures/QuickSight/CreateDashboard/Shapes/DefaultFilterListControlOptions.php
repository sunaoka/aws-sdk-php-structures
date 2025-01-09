<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListControlDisplayOptions $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT' $Type
 * @property FilterSelectableValues $SelectableValues
 */
class DefaultFilterListControlOptions extends Shape
{
    /**
     * @param array{
     *     DisplayOptions?: ListControlDisplayOptions,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT',
     *     SelectableValues?: FilterSelectableValues
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
