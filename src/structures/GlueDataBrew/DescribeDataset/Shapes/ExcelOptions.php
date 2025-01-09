<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SheetNames
 * @property list<int<0, 200>> $SheetIndexes
 * @property bool $HeaderRow
 */
class ExcelOptions extends Shape
{
    /**
     * @param array{
     *     SheetNames?: list<string>,
     *     SheetIndexes?: list<int<0, 200>>,
     *     HeaderRow?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
