<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DropDownControlDisplayOptions $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT' $Type
 * @property FilterSelectableValues $SelectableValues
 * @property 'AUTO'|'MANUAL' $CommitMode
 */
class DefaultFilterDropDownControlOptions extends Shape
{
    /**
     * @param array{
     *     DisplayOptions?: DropDownControlDisplayOptions,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT',
     *     SelectableValues?: FilterSelectableValues,
     *     CommitMode?: 'AUTO'|'MANUAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
