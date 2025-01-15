<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SheetNames
 * @property list<int<0, 200>>|null $SheetIndexes
 * @property bool|null $HeaderRow
 */
class ExcelOptions extends Shape
{
    /**
     * @param array{
     *     SheetNames?: list<string>|null,
     *     SheetIndexes?: list<int<0, 200>>|null,
     *     HeaderRow?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
