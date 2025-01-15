<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DropDownControlDisplayOptions|null $DisplayOptions
 * @property 'MULTI_SELECT'|'SINGLE_SELECT'|null $Type
 * @property FilterSelectableValues|null $SelectableValues
 * @property 'AUTO'|'MANUAL'|null $CommitMode
 */
class DefaultFilterDropDownControlOptions extends Shape
{
    /**
     * @param array{
     *     DisplayOptions?: DropDownControlDisplayOptions|null,
     *     Type?: 'MULTI_SELECT'|'SINGLE_SELECT'|null,
     *     SelectableValues?: FilterSelectableValues|null,
     *     CommitMode?: 'AUTO'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
