<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Column
 * @property int|null $Row
 * @property string|null $ColumnName
 * @property string|null $CellReference
 */
class Cell extends Shape
{
    /**
     * @param array{
     *     Column?: int|null,
     *     Row?: int|null,
     *     ColumnName?: string|null,
     *     CellReference?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
