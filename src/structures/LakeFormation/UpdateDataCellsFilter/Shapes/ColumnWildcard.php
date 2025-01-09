<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateDataCellsFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ExcludedColumnNames
 */
class ColumnWildcard extends Shape
{
    /**
     * @param array{ExcludedColumnNames?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
