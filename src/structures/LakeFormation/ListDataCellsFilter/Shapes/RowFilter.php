<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListDataCellsFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FilterExpression
 * @property AllRowsWildcard|null $AllRowsWildcard
 */
class RowFilter extends Shape
{
    /**
     * @param array{
     *     FilterExpression?: string|null,
     *     AllRowsWildcard?: AllRowsWildcard|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
