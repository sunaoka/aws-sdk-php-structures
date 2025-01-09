<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SheetNames
 * @property list<int> $SheetIndexes
 * @property bool $HeaderRow
 */
class ExcelOptions extends Shape
{
    /**
     * @param array{
     *     SheetNames?: list<string>,
     *     SheetIndexes?: list<int>,
     *     HeaderRow?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
