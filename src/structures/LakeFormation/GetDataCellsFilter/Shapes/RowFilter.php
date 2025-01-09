<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetDataCellsFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterExpression
 * @property AllRowsWildcard $AllRowsWildcard
 */
class RowFilter extends Shape
{
    /**
     * @param array{
     *     FilterExpression?: string,
     *     AllRowsWildcard?: AllRowsWildcard
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
